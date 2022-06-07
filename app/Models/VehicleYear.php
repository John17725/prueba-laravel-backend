<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleYear extends Model
{
    protected $table = 'year_vehicle';
    protected $fillable = [
        'year'
    ];

    public function createYear($year){
        return VehicleYear::create([
            'year' => $year
        ]);
    }
    public function updateYear($id,$year){
        return VehicleYear::where('id',$id)->update([
            'year' => $year
        ]);
    }
    public function deleteVehicleYear($id){
        return VehicleYear::where('id', $id)->delete();
    }
}
