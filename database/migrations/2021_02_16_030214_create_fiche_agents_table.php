<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFicheAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiche_agents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('matricule')->unique();
            $table->integer('cnrps')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('n_bon');
            $table->date('date');
            $table->string('uf');
            $table->string('filiere');
            $table->string('type_talon');
            $table->decimal('montant',8,2)->default(0,00);
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
        Schema::dropIfExists('fiche_agents');
    }
}
