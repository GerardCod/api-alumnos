<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Evento extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['inicio', 'fin', 'fecha', 'pc_id', 'laboratorio_id'];

    protected $casts = [
        'inicio' => 'time',
        'fin' => 'time',
        'fecha' => 'date'
    ];

    /**
     * Regresa la información de la entidad PC asociada.
     * @return BelongsTo
     */
    public function pc(): BelongsTo {
        return $this->belongsTo(PC::class);
    }

    /**
     * Regresa la información de la entidad Laboratorio asociada.
     * @return BelongsTo
     */
    public function laboratorio(): BelongsTo {
        return $this->belongsTo(Laboratorio::class);
    }
}
