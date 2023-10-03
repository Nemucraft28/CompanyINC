<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'cliente'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'clie_numero'; // Nombre de la clave primaria
    public $incrementing = false; // Indica que no es una clave primaria autoincremental

    protected $fillable = [
        'nombres',
        'cedula',
        'direccion',
        'ciudad_numero',
        'agente',
        'fecha_registro',
        'usrio_creador'
    ];
}