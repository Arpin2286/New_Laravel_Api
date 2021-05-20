<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Input;

class InputsController extends Controller
{
    public function index() {
        $inputs = Input::all();
        return view('barang.index',compact(['inputs']));
    }

    public function create() {
        
        return view('barang.create');
    }

    public function store(Request $request) {
        
        Input::create($request->all());
        return redirect('/barang');
    }

    public function edit($id){
        $input = Input::find($id);
        return view('barang.edit',compact(['input']));
    }

    public function update(Request $request, $id){
        $input = Input::find($id);
        $input->update($request->all());
        return redirect('/barang');
    }

    public function destroy($id){
        $input = Input::find($id);
        $input->delete($request->all());
        return redirect('/barang');
    }
}
