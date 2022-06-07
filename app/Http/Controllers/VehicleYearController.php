<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehicleYear;
use App\Http\Requests\VehicleYearRequest;

class VehicleYearController extends Controller
{
    public function index(){
        $years = VehicleYear::all();
        return view('tables.year_vehicle', compact('years'));
    }
    public function create(){
        return view('forms.year_create');
    }
    public function store(VehicleYearRequest $request){
        $validate = $request->validated();
        $store = VehicleYear::createYear($validate['nameYear']);
        return redirect()->route('years.list');
    }
    public function edit($id){
        $year = VehicleYear::find($id);
        return view('forms.edit.year_edit', compact('year'));
    }
    public function update(VehicleYearRequest $request){
        $validate = $request->validated();
        $store = VehicleYear::updateYear($request->id,$validate['nameYear']);
        return redirect()->route('years.list');
    }
    public function delete(Request $request){
        if(VehicleYear::deleteVehicleYear($request->id)){
            return redirect()->route('years.list');
        }else{
            return redirect()->back();
        }
    }
}
