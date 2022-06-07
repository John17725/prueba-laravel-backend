<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    protected $table = 'plazas';
    protected $fillable = [
        'cantidad'
    ];

    public function createPlace($places){
        return Places::create([
            'cantidad' => $places
        ]);
    }
    public function updatePlace($id,$places){
        return Places::where('id',$id)->update([
            'cantidad' => $places
        ]);
    }
    public function deletePlaces($id){
        return Places::where('id', $id)->delete();
    }
}
