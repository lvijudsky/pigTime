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
            $table->decimal('lat', 11,7);
            $table->decimal('lng', 11,7);
            $table->string('status');
            $table->string('avaliacao');

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
