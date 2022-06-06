<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table = 'motor';
    protected $fillable = [
        'combustible'
    ];

    public function createMotor($motor){
        return Motor::create([
            'combustible' => $motor
        ]);
    }
}
