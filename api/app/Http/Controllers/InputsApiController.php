<?php

namespace App\Http\Controllers;
use App\Models\Input;

use Illuminate\Http\Request;

class InputsApiController extends Controller
{
    public function index(){
        $inputs = Input::all();
        return response()->json(['message' => 'Behasil menampilkan data','data' => $inputs] );
    }

    public function show($id){
        $inputs = Input::find($id);
        return response()->json(['message' => 'Berhasil menampilkan data','data' => $inputs] );
    }

    public function store(Request $request){
        $inputs = Input::create($request->all());
        return response()->json(['message' => 'Berhasil menambahkan data','data' => $inputs] );
    }

    public function update(Request $request, $id){
        $inputs = Input::find($id);
        $inputs->update($request->all());
        return response()->json(['message' => 'Berhasil mengubah data','data' => $inputs] );
    }

    public function destroy($id){
        $input = Input::find($id);
        $input->delete();
        return response()->json(['message' => 'Berhasil menghapus data','data' => []] );
    }
}
