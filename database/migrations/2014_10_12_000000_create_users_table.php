<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string("photo");
            $table->string('nom');
            $table->string('email');
            $table->string('password');
            $table->string('prenom');
            $table->string('civilite');
            $table->string('adresse');
            $table->string('dateNaissance');
            $table->string('tel');
            $table->string('ville');
            $table->string('codePostale');
            $table->string('pays');
            $table->string('type');

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
}
