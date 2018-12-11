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
        Schema::create('empresa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Codigo', 50);
            $table->string('Nombre', 150);
            $table->boolean('Status');
            $table->string('Mensaje', 500);
            $table->string('IP', 15);
            $table->string('DataBase', 30);
            $table->string('User', 40);
            $table->string('Pass', 16);
            $table->integer('Port');
            $table->integer('AnyDesk');
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
