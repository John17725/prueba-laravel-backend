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
}
