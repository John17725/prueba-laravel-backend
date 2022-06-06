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
}
