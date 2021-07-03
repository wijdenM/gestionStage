<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
           $table->increments('idetudiant');
           $table->string('CIN');
           $table->string('numinscrit');
            $table->string('nometudiant');
            $table->string('prenometudiant');
            $table->string('idfiliere');
            $table->string('photo');
            $table->string('email');
            $table->string('password');
            $table->string('etat');
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
        Schema::dropIfExists('etudiants');
    }
}
