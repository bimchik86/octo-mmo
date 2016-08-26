<?php namespace Rpg\Mmorpg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRpgMmorpgCharacters extends Migration
{
    public function up()
    {
        Schema::create('rpg_mmorpg_characters', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id');
            $table->string('name');
            $table->integer('race_id');
            $table->integer('class_id');
            $table->integer('level');
            $table->integer('exp');
            $table->integer('exp_to_lvl');
            $table->integer('health');
            $table->integer('m_health');
            $table->integer('energy');
            $table->integer('m_energy');
            $table->integer('work_points');
            $table->integer('m_work_points');
            $table->integer('strength');
            $table->integer('dexterity');
            $table->integer('vitality');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rpg_mmorpg_characters');
    }
}
