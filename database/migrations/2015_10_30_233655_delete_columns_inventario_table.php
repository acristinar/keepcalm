<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteColumnsInventarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('inventario', function($table)
        {
            $table->dropColumn(['divisaoBens']);
            $table->dropColumn(['bens']);
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
            $table->text('divisaoBens');
            $table->text('bens');
        });
    }
}
