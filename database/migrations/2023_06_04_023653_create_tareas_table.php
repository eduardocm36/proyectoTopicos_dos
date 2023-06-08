<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_tareas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->bigInteger('panel_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();//dueño
            //invitados que puedan agregar y editar 
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
        Schema::dropIfExists('tareas');
    }
}
