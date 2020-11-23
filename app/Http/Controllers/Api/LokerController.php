<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Loker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LokerController extends Controller
{

    public function index()
    {
        $data = Loker::where('user_id', '!=', Auth::guard('user')->user()->id)
            ->where('is_approved',  1)
            ->orWhereNull('user_id')
            ->get();

        return response()->json($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required',
            'place' => 'required',
            'description' => 'required',
            'business_name' => 'required',
            'name' => 'required',
        ]);

        $loker = new Loker;
        $loker->user_id = Auth::guard('user')->user()->id;
        $loker->name = $request->name;
        $loker->business_name = $request->business_name;
        $loker->description = $request->description;
        $loker->salary = $request->salary;
        $loker->place = $request->place;
        $loker->phone = $request->phone;

        $loker->save();

        return response()->json($loker);
    }

    public function destroy($id)
    {
        $data = Loker::findOrFail($id);
        $hapus = $data->delete();
        if ($hapus) {
            return response()->json(['message' => 'delete success']);
        }
        return response()->json('error', 400);
    }

    // get the index only for logged user
    public function indexUser()
    {
        $data = Loker::where('user_id', '=', Auth::guard('user')->user()->id)->get();
        return response()->json($data);
    }
}
