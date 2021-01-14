<?php

namespace App\Http\Controllers;

use App\ImportantNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ImportantNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $importantNumber = ImportantNumber::query();
        $search = request()->query('q');

        // if qeury is not empty
        if ($search != "") {
            // take all column of model
            $columns = Schema::getColumnListing('important_numbers');
            foreach ($columns as $column) {
                $importantNumber->orWhere($column, 'LIKE', '%' . $search . '%');
            }
        }
        // dd($importantNumber->paginate(15)->appends(['keyword' => $search]));
        return view('importantNumber', ['importantNumber' => $importantNumber->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('formAddImportantNumber');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        if ($request->method() == "POST") {

            $importantNumber = new ImportantNumber;
            $importantNumber->name = $request->name;
            $importantNumber->address = $request->address;
            $importantNumber->phone = $request->phone;
            $importantNumber->save();
            return redirect('/nomer-penting');
        } else {
            return redirect('/nomer-penting');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ImportantNumber::find($id);
        return view('formEditImportantNumber', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $data = ImportantNumber::find($id);
        return view('formEditImportantNumber', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $importantNumber = ImportantNumber::find($id);
        $importantNumber->name = $request->name;
        $importantNumber->address = $request->address;
        $importantNumber->phone = $request->phone;
        $importantNumber->save();
        return redirect('/nomer-penting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $importantNumber = ImportantNumber::find($id);
        $hapus = $importantNumber->delete();
        if ($hapus) {
            return redirect('/nomer-penting');
        }
    }
}
