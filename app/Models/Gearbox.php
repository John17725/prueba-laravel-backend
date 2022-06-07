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
    public function updateGearbox($id,$gearbox){
        return Gearbox::where('id','=',$id)->update([
            'tipo' => $gearbox
        ]);
    }

    public function deleteGearbox($id){
        return Gearbox::where('id', $id)->delete();
    }
}
