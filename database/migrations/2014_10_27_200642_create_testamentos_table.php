<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('testamento', function($table)
        {
            $table->increments('id');
            $table->string('nome', 255);
            $table->date('data');
            $table->text('condSocial');
            $table->string('tituloSocial', 255);

            $table->softDeletes();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('testamento');
	}

}
