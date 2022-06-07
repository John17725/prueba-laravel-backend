<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\BodyWork;
use App\Models\Gearbox;
use App\Models\Mark;
use App\Models\ModelVehicle;
use App\Models\Motor;
use App\Models\Places;
use App\Models\Serie;
use App\Models\Traction;
use App\Models\VehicleYear;
use App\Http\Requests\VehicleRequest;

class VehicleController extends Controller
{
    public function index(){
        $vehicles = Vehicle::simplePaginate(10);
        return view('tables.vehiculos', compact('vehicles'));
    }
    public function create(){
        $marcas = Mark::all();
        $modelos = ModelVehicle::all();
        $motores = Motor::all();
        $tracciones = Traction::all();
        $years = VehicleYear::all();
        $gearboxes = Gearbox::all();
        $series = Serie::all();
        $plazas = Places::all();
        return view('forms.vehicle_create', compact('marcas','modelos','motores','tracciones','years','gearboxes','plazas','series'));
    }
    public function store(VehicleRequest $request){
        $validate = $request->validated();
        $store = Vehicle::createVehicle($validate['idMarca'],$validate['idModel'],$validate['idMotor'],$validate['idTraction'],$validate['idYear'],$validate['idSerie'],$validate['idGearbox'],$validate['idPlaces'],$validate['namePeso'],);
        return redirect()->route('vehicles.list');
    }
    public function edit($id){
        $marcas = Mark::all();
        $modelos = ModelVehicle::all();
        $motores = Motor::all();
        $tracciones = Traction::all();
        $years = VehicleYear::all();
        $gearboxes = Gearbox::all();
        $series = Serie::all();
        $plazas = Places::all();
        $vehicle = Vehicle::find($id);
        return view('forms.edit.vehicle_edit', compact('marcas','modelos','motores','tracciones','years','gearboxes','plazas','series','vehicle'));
    }
    public function update(VehicleRequest $request){
        $validate = $request->validated();
        $store = Vehicle::updateVehicle($request->id,$validate['idMarca'],$validate['idModel'],$validate['idMotor'],$validate['idTraction'],$validate['idYear'],$validate['idSerie'],$validate['idGearbox'],$validate['idPlaces'],$validate['namePeso'],);
        return redirect()->route('vehicles.list');
    }
    public function delete(Request $request){
        if(Vehicle::deleteVehicle($request->id)){
            return redirect()->route('vehicles.list');
        }else{
            return redirect()->back();
        }
    }
}
