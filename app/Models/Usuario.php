<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Model
{
    use HasFactory, HasApiTokens;
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

    /**
     * Regresa la información del modelo rol asociado al usuario.
     * @return BelongsTo
     */
    public function rol(): BelongsTo {
        return $this->belongsTo(Rol::class);
    }

    /**
     * Regresa la información del modelo carrera asociado al usuario.
     * @return BelongsTo
     */
    public function carrera(): BelongsTo {
        return $this->belongsTo(Carrera::class);
    }
}
