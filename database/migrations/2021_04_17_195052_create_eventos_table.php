<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->time('inicio');
            $table->time('fin');
            $table->foreignId('pc_id')->constrained('p_c_s');
            $table->foreignId('laboratorio_id')->constrained('laboratorios');
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->foreignId('programa_id')->constrained('programas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
