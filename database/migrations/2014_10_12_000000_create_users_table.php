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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom')->nullable();
            $table->string('email')->unique();
            $table->string('date_naiss')->nullable();
            $table->string('tel')->nullable();
            $table->string('description')->nullable();
            $table->string('Adresse')->nullable();
            $table->string('site_internet')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('image')->nullable();
            $table->string('profession')->nullable();
            $table->integer('is_enterprise')->nullable();
            $table->foreignId('secteur_id')->nullable();
            $table->foreignId('sous_secteur_id')->nullable();
            $table->foreignId('genre_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
