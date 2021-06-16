<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'tipo',
        'estado',
        'ciudad',
        'cp',
        'colonia',
        'calle',
        'numExterior',
        'numInterior',
        'id_user'
    ];
}
