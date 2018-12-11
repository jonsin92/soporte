<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_empresa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('IP', 15);
            $table->string('User', 30);
            $table->string('Pass', 16);
            $table->boolean('Status');
            $table->string('Mensaje', 500);
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
        Schema::dropIfExists('_empresa');
    }
}
