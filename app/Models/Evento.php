<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Evento extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['inicio', 'fin', 'fecha', 'pc_id', 'laboratorio_id', 'usuario_id', 'programa_id'];

    protected $casts = [
        'inicio' => 'timestamp',
        'fin' => 'timestamp',
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

    /**
     * Regresa la información del usuario asignado.
     * @return BelongsTo
     */
    public function usuario(): BelongsTo {
        return $this->belongsTo(Usuario::class);
    }

    /**
     * Regresa la información del programa asignado.
     * @return BelongsTo
     */
    public function programa(): BelongsTo {
        return $this->belongsTo(Programa::class);
    }
}
