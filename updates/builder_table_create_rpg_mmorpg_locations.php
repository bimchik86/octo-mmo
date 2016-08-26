<?php namespace Rpg\Mmorpg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRpgMmorpgLocations extends Migration
{
    public function up()
    {
        Schema::create('rpg_mmorpg_locations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->integer('planet_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rpg_mmorpg_locations');
    }
}
