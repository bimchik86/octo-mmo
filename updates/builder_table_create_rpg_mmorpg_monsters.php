<?php namespace Rpg\Mmorpg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRpgMmorpgMonsters extends Migration
{
    public function up()
    {
        Schema::create('rpg_mmorpg_monsters', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->integer('level');
            $table->integer('strength');
            $table->integer('dexterity');
            $table->integer('vitality');
            $table->integer('education');
            $table->integer('health');
            $table->integer('min_exp');
            $table->integer('max_exp');
            $table->integer('min_gold');
            $table->integer('max_gold');
            $table->integer('location_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rpg_mmorpg_monsters');
    }
}
