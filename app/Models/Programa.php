<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Programa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    protected $fillable = [
        'nombre',
        'nombre_ejecucion'
    ];

    /**
     * Regresa la lista de eventos relacionados.
     * @return HasMany
     */
    public function eventos(): HasMany {
        return $this->hasMany(Evento::class);
    }
}
