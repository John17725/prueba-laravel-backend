<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;
use App\Http\Requests\MotorsRequest;

class MotorTypeController extends Controller
{
    public function index(){
        $motors = Motor::all();
        return view('tables.tipo_motor', compact('motors'));
    }

    public function create(){
        return view('forms.motor_type_create');
    }

    public function store(MotorsRequest $request){
        $validate = $request->validated();
        $store = Motor::createMotor($validate['nameMotor']);
        return redirect()->route('motors.list');
    }
}
