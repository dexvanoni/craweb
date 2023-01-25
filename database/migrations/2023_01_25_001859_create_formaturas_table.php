<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formaturas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data');
            $table->time('hora');
            $table->string('titulo');
            $table->string('ns');
            $table->string('local');
            $table->string('cmt_tropa');
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
        Schema::dropIfExists('formaturas');
    }
}
