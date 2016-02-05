<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsInventario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('inventario', function ($table) {
            $table->integer('pessoa_id')->unsigned();
            $table->foreign('pessoa_id')->references('id')->on('pessoa');
            $table->date('data')->nullable();
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
        Schema::table('inventario', function($table)
        {
            $table->dropColumn(array('pessoa_id', 'data'));
        });
    }
}
