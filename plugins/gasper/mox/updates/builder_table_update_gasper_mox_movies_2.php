<?php namespace Gasper\Mox\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGasperMoxMovies2 extends Migration
{
    public function up()
    {
        Schema::table('gasper_mox_movies', function($table)
        {
            $table->integer('language_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('gasper_mox_movies', function($table)
        {
            $table->dropColumn('language_id');
        });
    }
}
