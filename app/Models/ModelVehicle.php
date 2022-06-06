<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelVehicle extends Model
{
    protected $table = 'modelo';
    protected $fillable = [
        'modelo'
    ];

    public function createModel($modelo){
        return ModelVehicle::create([
            'modelo' => $modelo
        ]);
    }
}
