<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateAdmUsuarioTable extends Migration
{

    public function up()
    {
        Schema::create('adm_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email');
            $table->string('password');
        });
    }

    public function down()
    {
        Schema::dropIfExists('adm_usuario');
    }

}
