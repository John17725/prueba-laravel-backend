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
}
