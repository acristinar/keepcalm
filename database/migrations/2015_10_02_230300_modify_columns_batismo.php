<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyColumnsBatismo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('batismo', function($table)
        {
            $table->date('data')->nullable()->change();
            $table->string('pai', 255)->nullable()->change();
            $table->string('mae', 255)->nullable()->change();
            $table->string('padrinho', 255)->nullable()->change();
            $table->string('madrinha', 255)->nullable()->change();
            $table->string('nome', 255)->nullable()->change();
            $table->string('sexo', 1)->nullable()->change();
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
            $table->date('data')->change();
            $table->string('pai', 255)->change();
            $table->string('mae', 255)->change();
            $table->string('padrinho', 255)->change();
            $table->string('madrinha', 255)->change();
            $table->string('nome', 255)->change();
            $table->string('sexo', 1)->change();
        });
    }
}
