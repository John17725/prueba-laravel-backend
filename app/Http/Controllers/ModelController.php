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
}
