<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $table = 'serie';
    protected $fillable = [
        'carroceria_id',
        'puertas',
        'version'
    ];

    public function createSerie($carroceria_id,$puertas,$version){
        return Serie::create([
            'carroceria_id' => $carroceria_id,
            'puertas' => $puertas,
            'version' => $version
        ]);
    }
    public function deleteSerie($id){
        return Serie::where('id', $id)->delete();
    }
    public function updateSerie($id,$carroceria_id,$puertas,$version){
        return Serie::where('id','=',$id)->update([
            'carroceria_id' => $carroceria_id,
            'puertas' => $puertas,
            'version' => $version
        ]);
    }
    public function Carroceria(){
        return $this->belongsTo(BodyWork::class);
    }
}
