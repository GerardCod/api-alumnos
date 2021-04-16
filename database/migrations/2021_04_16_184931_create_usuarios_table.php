<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('matricula');
            $table->primary('matricula');
            $table->string('nombre');
            $table->string('a_paterno');
            $table->string('a_materno');
            $table->string('cuatrimestre');
            $table->foreignId('carrera_id')->constrained()->onUpdate('cascade')->onDelete('no action');
            $table->foreignId('rol_id')->constrained('rols')->onUpdate('cascade')->onDelete('no action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
