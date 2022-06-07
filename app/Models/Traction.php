<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traction extends Model
{
    protected $table = 'traccion';
    protected $fillable = [
        'tipo'
    ];

    public function createTraction($traccion){
        return Traction::create([
            'tipo' => $traccion
        ]);
    }
    public function updateTraction($id,$traccion){
        return Traction::where('id',$id)->update([
            'tipo' => $traccion
        ]);
    }
    public function deleteTraction($id){
        return Traction::where('id', $id)->delete();
    }
}
