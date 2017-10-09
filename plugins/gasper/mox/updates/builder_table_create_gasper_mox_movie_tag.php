<?php namespace Gasper\Mox\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGasperMoxMovieTag extends Migration
{
    public function up()
    {
        Schema::create('gasper_mox_movie_tag', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->primary(['movie_id','tag_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gasper_mox_movie_tag');
    }
}
