<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rol extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable = ['nombre'];

    /**
     * Regresa la información de todos los usuarios asociados a un rol.
     * @return HasMany
     */
    public function usuarios(): HasMany {
        return $this->hasMany(Usuario::class);
    }
}
