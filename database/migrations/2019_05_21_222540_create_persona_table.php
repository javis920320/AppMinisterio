<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('nacionalidad', 50);
            $table->string('identificacion', 50);
            $table->string('direccion', 50);
            $table->string('telefono', 50);
            $table->string('genero', 2);
            $table->string('escolaridad', 50);
            $table->string('edad', 4);
            $table->string('clasificacion', 50);
            $table->string('infetnica', 50);
            $table->string('poblacionvul', 50);
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
        Schema::dropIfExists('persona');
    }
}
