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
    public function edit($id){
        $motor = Motor::find($id);
        return view('forms.edit.motor_type_edit',compact('motor'));
    }

    public function update(MotorsRequest $request){
        $validate = $request->validated();
        $store = Motor::updateMotor($request->id,$validate['nameMotor']);
        return redirect()->route('motors.list');
    }
    public function delete(Request $request){
        if(Motor::deleteMotor($request->id)){
            return redirect()->route('motors.list');
        }else{
            return redirect()->back();
        }
    }
}
