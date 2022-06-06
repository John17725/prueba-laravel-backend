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
}
