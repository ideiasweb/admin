<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateAdmConfigsTable extends Migration
{

    public function up()
    {
        Schema::create('adm_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('chave');
            $table->text('valor');
        });
    }

    public function down()
    {
        Schema::dropIfExists('adm_configs');
    }

}
