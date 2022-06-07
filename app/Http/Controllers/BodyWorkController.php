<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BodyWork;
use App\Http\Requests\BodyWorkRequest;

class BodyWorkController extends Controller
{
    public function index(){
        $carrocerias = BodyWork::all();
        return view('tables.carroceria',compact('carrocerias'));
    }

    public function create(){
        return view('forms.carroceria_create');
    }

    public function store(BodyWorkRequest $request){
        $validate = $request->validated();
        $store = BodyWork::createCarroceria($validate['nameCarroceria']);
        return redirect()->route('bodywork.list');
    }
    public function edit($id){
        $bodywork = BodyWork::find($id);
        return view('forms.edit.carroceria_edit', compact('bodywork'));
    }

    public function update(BodyWorkRequest $request){
        $validate = $request->validated();
        $store = BodyWork::updateCarroceria($request->id,$validate['nameCarroceria']);
        return redirect()->route('bodywork.list');
    }

    public function delete(Request $request){
        if(BodyWork::deleteCarroceria($request->id)){
            return redirect()->route('bodywork.list');
        }else{
            return redirect()->back();
        }
    }
}
