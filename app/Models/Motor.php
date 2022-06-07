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
    public function updateMotor($id,$motor){
        return Motor::where('id',$id)->update([
            'combustible' => $motor
        ]);
    }
    public function deleteMotor($id){
        return Motor::where('id', $id)->delete();
    }
}
