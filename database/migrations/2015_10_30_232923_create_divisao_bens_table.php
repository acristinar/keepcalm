<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDivisaoBensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('divisao_bens', function($table)
        {
            $table->integer('pessoa_id')->unsigned();
            $table->foreign('pessoa_id')->references('id')->on('pessoa');

            $table->integer('inventario_id')->unsigned();
            $table->foreign('inventario_id')->references('id')->on('inventario');

            $table->text('bens');

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
        //
        Schema::dropIfExists('divisao_bens');
    }
}
