<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNomeSexoToBatismoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('batismo', function ($table) {
            $table->string('nome', 255);
            $table->char('sexo', 1);
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
        Schema::table('batismo', function($table)
        {
            $table->dropColumn(array('nome', 'sexo'));
        });
    }
}
