<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('matricule')->unique();
            $table->integer('n_engistrement')->unique();
            $table->integer('cnrps')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('n_bon')->nullable();
            $table->date('date');
            $table->string('uf');
            $table->string('cote_par_agent');
            $table->string('type_acte');
            $table->string('cv_ce');
            $table->decimal('montant',8,2)->default(0.00);
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
        Schema::dropIfExists('bons');
    }
}
