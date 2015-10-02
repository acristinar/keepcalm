<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteColumnsBatismo extends Migration
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
            $table->dropColumn(['ano', 'condSocialPais', 'moradiaPais', 'condSocialPadrinhos', 'moradiaPadrinhos']);
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
            $table->integer('ano');
            $table->text('condSocialPais');
            $table->text('moradiaPais');
            $table->text('condSocialPadrinhos');
            $table->text('moradiaPadrinhos');
        });
    }
}
