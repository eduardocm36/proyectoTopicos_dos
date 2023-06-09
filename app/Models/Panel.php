<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'codigo',
        'tipo', //curso //personal
        'user_id', //dueño
    ];
}
