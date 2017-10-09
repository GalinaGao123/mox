<?php namespace Gasper\Mox\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGasperMoxTags extends Migration
{
    public function up()
    {
        Schema::create('gasper_mox_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gasper_mox_tags');
    }
}
