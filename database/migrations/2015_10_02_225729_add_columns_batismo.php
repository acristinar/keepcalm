<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsBatismo extends Migration
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
            $table->text('condSocialMae')->nullable();
            $table->text('condSocialPai')->nullable();
            $table->text('moradiaPai')->nullable();
            $table->text('moradiaMae')->nullable();
            $table->text('condSocialMadrinha')->nullable();
            $table->text('condSocialPadrinho')->nullable();
            $table->text('moradiaMadrinha')->nullable();
            $table->text('moradiaPadrinho')->nullable();
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
            $table->dropColumn(array('condSocialMae', 'condSocialPai', 'moradiaPai', 'moradiaMae', 'condSocialMadrinha', 'condSocialPadrinho',
            'moradiaMadrinha', 'moradiaPadrinho'));
        });
    }
}
