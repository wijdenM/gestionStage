<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncadrantentreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encadrantentreprises', function (Blueprint $table) {
          $table->increments('idencad');
            $table->string('nomEncad');
            $table->string('prenomEncad');
            $table->string('societe');
            $table->string('numtel');
            $table->string('photo');
            $table->string('email');
            $table->string('password');
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
        Schema::dropIfExists('encadrantentreprises');
    }
}
