<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gearbox extends Model
{
    protected $table = 'caja_cambios';
    protected $fillable = [
        'tipo'
    ];

    public function createGearbox($gearbox){
        return Gearbox::create([
            'tipo' => $gearbox
        ]);
    }
}
