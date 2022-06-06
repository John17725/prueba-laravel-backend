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

    public function Carroceria(){
        return $this->belongsTo(BodyWork::class);
    }
}
