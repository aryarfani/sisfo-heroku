<?php

namespace App\Http\Controllers;

use App\Loker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class LokerController extends Controller
{
    public function index()
    {
        $loker = Loker::query();

        $search = request()->query('q');

        // if qeury is not empty
        if ($search != "") {
            // take all column of model
            $columns = Schema::getColumnListing('lokers');
            foreach ($columns as $column) {
                $loker->orWhere($column, 'LIKE', '%' . $search . '%');
            }
        }

        return view('loker', ['data' => $loker->paginate(15)]);
    }

    public function destroy($id)
    {
        $data = Loker::findOrFail($id);
        $hapus = $data->delete();
        if ($hapus) {
            return redirect('/loker');
        }
    }

    // function to approve loker
    public function approve($id)
    {
        $loker = Loker::find($id);
        $loker->update(array(
            'is_approved' => 1,
        ));
        return redirect('/loker');
    }

    public function create()
    {
        return view('formAddLoker');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'place' => 'required',
            'business_name' => 'required',
            'phone' => 'required',
            'salary' => 'required',
            'description' => 'required',
        ]);

        if ($request->method() == "POST") {
            $loker = new Loker;
            $loker->description = $request->description;
            $loker->salary = $request->salary;
            $loker->phone = $request->phone;
            $loker->business_name = $request->business_name;
            $loker->place = $request->place;
            $loker->name = $request->name;
            $loker->is_approved = 1;

            $loker->save();
            return redirect('/loker');
        } else {
            return redirect('/loker');
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'place' => 'required',
            'business_name' => 'required',
            'phone' => 'required',
            'salary' => 'required',
            'description' => 'required',
        ]);

        $loker = Loker::find($id);
        $loker->description = $request->description;
        $loker->salary = $request->salary;
        $loker->phone = $request->phone;
        $loker->business_name = $request->business_name;
        $loker->place = $request->place;
        $loker->name = $request->name;

        $loker->save();
        return redirect('/loker');
    }
}
