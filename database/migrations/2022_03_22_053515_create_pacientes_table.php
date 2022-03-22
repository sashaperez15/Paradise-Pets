<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_propietario')->constrained('propietarios')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string("nombre");
            $table->enum("sexo", ["hembra", "macho"]);
            $table->float("peso");
            $table->float("edad");
            $table->enum("color", ["blanco", "gris", "cafe"]);
            $table->enum("esterilizado", ["si", "no"]);
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
        Schema::dropIfExists('pacientes');
    }
};
