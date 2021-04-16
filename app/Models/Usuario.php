<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    protected $fillable = [
        'matricula',
        'nombre',
        'a_paterno',
        'a_materno',
        'cuatrimestre',
        'carrera_id',
        'rol_id'
    ];
}
