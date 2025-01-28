<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('genre');
            $table->date('datenaiss');
            $table->string('lieu');
            $table->string('situation');
            $table->integer('nombrenfant');
            $table->string('exp_professionnelle');
            $table->integer('nombrexp');
            $table->string('dernierposte');
            $table->string('dernieremp');
            $table->string('cv')->nullable();
            $table->string('lettremoti')->nullable();
            $table->string('lieu_residence');
            $table->string('adresse');
            $table->boolean('handicap');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('infos');
    }
}
