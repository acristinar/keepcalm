<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatismoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batismo', function($table)
        {
            $table->increments('id');
            $table->integer('ano');
            $table->date('data');
            $table->string('pai', 255);
            $table->string('mae', 255);
            $table->text('condSocialPais');
            $table->text('moradiaPais');
            $table->string('padrinho', 255);
            $table->string('madrinha', 255);
            $table->text('condSocialPadrinhos');
            $table->text('moradiaPadrinhos');

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
        Schema::dropIfExists('batismo');
    }
}
