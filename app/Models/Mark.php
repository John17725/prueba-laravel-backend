<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $table = 'marca';
    protected $fillable = [
        'nombre'
    ];

    public static function createMarca($name){
        return Mark::create([
            'nombre' => $name
        ]);
    }
    public function deleteMark($id){
        return Mark::where('id', $id)->delete();
    }
    public static function updateMarca($id,$name){
        return Mark::where('id',$id)->update([
            'nombre' => $name
        ]);
    }
}
