<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('autoridade');
            $table->string('precedencia');
            $table->string('foto'); 
            $table->string('nome_completo');
            $table->string('nome_guerra');
            $table->string('titulo');
            $table->string('representante');
            $table->string('posto_rep');
            $table->string('nome_completo_rep');
            $table->string('nome_guerra_rep');
            $table->string('formatura');
            $table->string('check_portao');
            $table->string('check_mesa');
            $table->string('check_precedencia');
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
        Schema::dropIfExists('listas');
    }
}
