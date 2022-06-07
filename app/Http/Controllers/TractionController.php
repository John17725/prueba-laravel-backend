<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Traction;
use App\Http\Requests\TractionRequest;

class TractionController extends Controller
{
    public function index(){
        $tractions = Traction::all();
        return view('tables.tipo_traccion', compact('tractions'));
    }
    public function create(){
        return view('forms.traction_create');
    }
    public function store(TractionRequest $request){
        $validate = $request->validated();
        $store = Traction::createTraction($validate['nameTraction']);
        return redirect()->route('traction.list');
    }
    public function edit($id){
        $traction = Traction::find($id);
        return view('forms.edit.traction_edit', compact('traction'));
    }
    public function update(TractionRequest $request){
        $validate = $request->validated();
        $store = Traction::updateTraction($request->id,$validate['nameTraction']);
        return redirect()->route('traction.list');
    }
    public function delete(Request $request){
        if(Traction::deleteTraction($request->id)){
            return redirect()->route('traction.list');
        }else{
            return redirect()->back();
        }
    }
}
