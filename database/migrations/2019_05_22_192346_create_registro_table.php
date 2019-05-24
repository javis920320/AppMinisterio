<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dirreclamado', 50);
            $table->string('actividadeconomica', 100); 
            $table->string('clasificacionreclamado', 100);
            $table->string('serviciosolic', 100);
            $table->string('motivoconsult', 100);
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('inspector_id');//remision a  inspector
            $table->string('audiconciliacion', 100);
            $table->dateTime('fechaudiencia');
            $table->string('horaaudiencia', 100);
            $table->string('estado', 2);
            $table->foreign('persona_id')
            ->references('id')->on('persona');
            $table->foreign('inspector_id')
            ->references('id')->on('inspectores');
            
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
        Schema::dropIfExists('registro');
    }
}
