<?php namespace Rpg\Mmorpg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRpgMmorpgRaces extends Migration
{
    public function up()
    {
        Schema::create('rpg_mmorpg_races', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rpg_mmorpg_races');
    }
}
