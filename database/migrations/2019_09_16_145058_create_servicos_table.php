<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nome');
            $table->longText('descricao');
            $table->string('endereco');
            $table->dateTime('horaInicial');
            $table->dateTime('horaFinal');
            $table->string('rg');
            $table->string('status');
            $table->string('avaliacao')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicos');
    }
}
