<?php namespace Gasper\Mox\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGasperMoxMovies extends Migration
{
    public function up()
    {
        Schema::create('gasper_mox_movies', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('desc');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gasper_mox_movies');
    }
}
