<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalizacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localizacoes', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('local_id')->unsigned();
			$table->foreign('local_id')->references('id')->on('locais')->onDelete('restrict');
			$table->integer('acao_id')->unsigned();
			$table->foreign('acao_id')->references('id')->on('acoes')->onDelete('restrict');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
			$table->date('data_inicial');
			$table->time('hora_inicial');
			$table->date('data_final');
			$table->time('hora_final');	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('localizacoes');
    }
}
