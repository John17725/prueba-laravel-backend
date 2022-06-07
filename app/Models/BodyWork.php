<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyWork extends Model
{
    protected $table = 'carroceria';
    protected $fillable = [
        'tipo'
    ];

    public function createCarroceria($tipo){
        return BodyWork::create([
            'tipo' => $tipo
        ]);
    }
    public function updateCarroceria($id,$tipo){
        return BodyWork::where('id',$id)->update([
            'tipo' => $tipo
        ]);
    }
    public function deleteCarroceria($id){
        return BodyWork::where('id', $id)->delete();
    }
}
