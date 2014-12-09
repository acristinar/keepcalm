<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTestamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        //
        Schema::table('testamento', function ($table) {
            $table->text('causaMorte');
            $table->string('igrejaEnterro', 255);
            $table->string('habitoEnterro', 255);
            $table->char('sexo', 1);
            $table->string('naturalidade', 255);
            $table->string('ocupacao', 255);
            $table->string('moradia', 255);
            $table->string('testamenteiro', 255);
            $table->string('relacaoTestamenteiro', 255);
        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::table('testamento', function($table)
        {
            $table->dropColumn(array('causaMorte', 'igrejaEnterro', 'habitoEnterro', 'sexo', 'naturalidade'
            , 'ocupacao', 'moradia', 'testamenteiro', 'relacaoTestamenteiro'));
        });
	}

}
