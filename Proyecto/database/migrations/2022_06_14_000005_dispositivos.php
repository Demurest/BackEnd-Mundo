<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dispositivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('dispositivos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mod_id');
            $table->unsignedBigInteger('bod_id');
            $table->string('nombre_dispo');
            $table->foreign('mod_id')->references('id')->on('modelos');
            $table->foreign('bod_id')->references('id')->on('bodegas');

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
        //
        Schema::dropIfExists('modelos');
    }
}
