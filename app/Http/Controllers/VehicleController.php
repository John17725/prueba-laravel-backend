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
        $vehicles = Vehicle::all();
        // dd($vehicl);
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
        // dd($request);
        $validate = $request->validated();
        $store = Vehicle::createVehicle($validate['idMarca'],$validate['idModel'],$validate['idMotor'],$validate['idTraction'],$validate['idYear'],$validate['idSerie'],$validate['idGearbox'],$validate['idPlaces'],$validate['namePeso'],);
        return redirect()->route('vehicles.list');
    }
}
