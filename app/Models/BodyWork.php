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
}
