<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('inventario', function($table)
        {
            $table->increments('id');
            $table->text('gastosFunerarios')->nullable();
            $table->text('bens')->nullable();
            $table->text('dividas')->nullable();
            $table->text('divisaoBens')->nullable();

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
        Schema::dropIfExists('inventario');
    }
}
