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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->string('email_contact')->nullable();
            $table->string('dateline');
            $table->string('salaire_min')->nullable();
            $table->string('salaire_max')->nullable();
            $table->string('experience');
            $table->string('qualification');
            $table->string('contrat')->nullable();
            $table->string('genre_id')->nullable();
            $table->string('image')->nullable();
            $table->string('pays')->nullable();
            $table->string('region')->nullable();
            $table->string('ville')->nullable();
            $table->string('adresse');
            $table->string('tel')->nullable();
            $table->string('site_internet')->nullable();
            $table->string('etat')->nullable();
            $table->string('accepted')->nullable();
            $table->foreignId('secteur_id')->constrained();
            $table->foreignId('sous_secteur_id')->constrained();
            $table->foreignId('type_job_id')->constrained();
            $table->foreignId('entreprise_id')->nullable();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('jobs');
    }
};
