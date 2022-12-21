<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tache_mezimas', function (Blueprint $table) {
            $table->id();
            $table->string('nomTache');
            $table->integer('dureeTache');
            $table->boolean('statutTache');
            $table->string('tacheAnt');
            $table->unsignedBigInteger('projet_mezima_id');
            $table->foreign('projet_mezima_id')->references('id')->on('projet_mezimas');
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
        Schema::dropIfExists('tache_mezimas');
    }
};
