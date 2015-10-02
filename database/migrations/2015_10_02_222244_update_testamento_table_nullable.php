<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTestamentoTableNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('testamento', function($table)
        {
            $table->string('nome', 255)->nullable()->change();
            $table->date('data')->nullable()->change();;
            $table->text('condSocial')->nullable()->change();
            $table->string('tituloSocial', 255)->nullable()->change();
            $table->text('causaMorte')->nullable()->change();
            $table->string('igrejaEnterro', 255)->nullable()->change();
            $table->string('habitoEnterro', 255)->nullable()->change();
            $table->string('sexo', 1)->nullable()->change();
            $table->string('naturalidade', 255)->nullable()->change();
            $table->string('ocupacao', 255)->nullable()->change();
            $table->string('moradia', 255)->nullable()->change();
            $table->string('testamenteiro', 255)->nullable()->change();
            $table->string('relacaoTestamenteiro', 255)->nullable()->change();
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
            $table->string('nome', 255)->change();
            $table->date('data')->change();;
            $table->text('condSocial')->change();
            $table->string('tituloSocial', 255)->change();
            $table->text('causaMorte')->change();
            $table->string('igrejaEnterro', 255)->change();
            $table->string('habitoEnterro', 255)->change();
            $table->char('sexo', 1)->change();
            $table->string('naturalidade', 255)->change();
            $table->string('ocupacao', 255)->change();
            $table->string('moradia', 255)->change();
            $table->string('testamenteiro', 255)->change();
            $table->string('relacaoTestamenteiro', 255)->change();
        });
    }
}
