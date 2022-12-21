<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projet_mezimas', function (Blueprint $table) {
            $table->id();
            $table->string('nomProjet');
            $table->string('nomClient');
            $table->string('nomResponsable');     
            $table->string('nomService');            
            $table->string('nomZone')->default("Estuaire")->nullable();            
            $table->integer('dureeProjet')->default(0)->nullable();
            $table->string('statutProjet')->default("En courss")->nullable();
            $table->integer('nbrTache')->default(0)->nullable();
            $table->integer('nbrTacheFini')->default(0)->nullable();
            $table->text('description');
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
        Schema::dropIfExists('projet_mezimas');
    }
};
