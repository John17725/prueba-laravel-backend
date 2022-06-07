<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ModelRequest;
use App\Models\ModelVehicle;

class ModelController extends Controller
{
    public function index(){
        $models = ModelVehicle::all();
        return view('tables.modelo', compact('models'));
    }
    public function create(){
        return view('forms.model_create');
    }
    public function store(ModelRequest $request){
        $validate = $request->validated();
        $store = ModelVehicle::createModel($validate['nameModel']);
        return redirect()->route('models.list');
    }
    public function edit($id){
        $model = ModelVehicle::find($id);
        return view('forms.edit.model_edit', compact('model'));
    }

    public function update(ModelRequest $request){
        $validate = $request->validated();
        $store = ModelVehicle::updateModel($request->id,$validate['nameModel']);
        return redirect()->route('models.list');
    }
    public function delete(Request $request){
        if(ModelVehicle::deleteModelVehicle($request->id)){
            return redirect()->route('models.list');
        }else{
            return redirect()->back();
        }
    }
}
