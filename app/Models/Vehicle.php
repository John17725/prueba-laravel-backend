<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehiculo';
    protected $fillable = [
        'marca_id',
        'modelo_id',
        'motor_id',
        'traccion_id',
        'year_vehicle_id',
        'serie_id',
        'caja_cambios_id',
        'plazas_id',
        'peso'
    ];

    public static function createVehicle($marca_id,$modelo_id,$motor_id,$traccion_id,$year_vehicle_id,$serie_id,$caja_cambios_id,$plazas_id,$peso){
        return Vehicle::create([
            'marca_id' => $marca_id,
            'modelo_id' => $modelo_id,
            'motor_id' => $motor_id,
            'traccion_id' => $traccion_id,
            'year_vehicle_id' => $year_vehicle_id,
            'serie_id' => $serie_id,
            'caja_cambios_id' => $caja_cambios_id,
            'plazas_id' => $plazas_id,
            'peso' => $peso
        ]);
    }
    public static function updateVehicle($id,$marca_id,$modelo_id,$motor_id,$traccion_id,$year_vehicle_id,$serie_id,$caja_cambios_id,$plazas_id,$peso){
        return Vehicle::where('id',$id)->update([
            'marca_id' => $marca_id,
            'modelo_id' => $modelo_id,
            'motor_id' => $motor_id,
            'traccion_id' => $traccion_id,
            'year_vehicle_id' => $year_vehicle_id,
            'serie_id' => $serie_id,
            'caja_cambios_id' => $caja_cambios_id,
            'plazas_id' => $plazas_id,
            'peso' => $peso
        ]);
    }
    public function deleteVehicle($id){
        return Vehicle::where('id', $id)->delete();
    }
    public function marca(){
        return $this->belongsTo(Mark::class);
    }
    public function caja(){
        return $this->belongsTo(Gearbox::class);
    }
    public function motor(){
        return $this->belongsTo(Motor::class);
    }
    public function modelo(){
        return $this->belongsTo(ModelVehicle::class);
    }
    public function plazas(){
        return $this->belongsTo(Places::class);
    }
    public function serie(){
        return $this->belongsTo(Serie::class);
    }
    public function traccion(){
        return $this->belongsTo(Traction::class);
    }
    public function year_vehicle(){
        return $this->belongsTo(VehicleYear::class);
    }
    public function caja_cambios(){
        return $this->belongsTo(Gearbox::class);
    }
    
}
