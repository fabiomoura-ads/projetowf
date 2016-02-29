<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locais', function (Blueprint $table) {
            $table->increments("id");
			$table->string("nome");
			$table->double("longitude", 15, 8);
			$table->double("latitude", 15, 8);
			$table->string("endereco", 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('locais');
		
    }
}
