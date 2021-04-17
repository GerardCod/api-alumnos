<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carrera extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    protected $fillable = ['nombre'];

    /**
     * Regresa la información de todos los modelos de usuario asociados a una carrera.
     * @return HasMany
     */
    public function usuarios(): HasMany {
        return $this->hasMany(Usuario::class);
    }
}
