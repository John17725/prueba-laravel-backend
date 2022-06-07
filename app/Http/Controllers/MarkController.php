<?php

namespace App\Http\Controllers;
use App\Models\Mark;

use Illuminate\Http\Request;
use App\Http\Requests\MarkRequest;

class MarkController extends Controller
{
    public function index(){
        $marks = Mark::all();
        return view('tables.marca',compact('marks'));
    }

    public function create(){
        return view('forms.mark_create');
    }
    public function store(MarkRequest $request){
        $validate = $request->validated();
        $store = Mark::createMarca($validate['nameMark']);
        return redirect()->route('marks.list');
    }
    public function edit($id){
        $mark = Mark::find($id);
        return view('forms.edit.mark_edit',compact('mark'));
    }
    public function update(MarkRequest $request){
        $validate = $request->validated();
        $store = Mark::updateMarca($request->id,$validate['nameMark']);
        return redirect()->route('marks.list');
    }
    public function delete(Request $request){
        if(Mark::deleteMark($request->id)){
            return redirect()->route('marks.list');
        }else{
            return redirect()->back();
        } 
    }
}
