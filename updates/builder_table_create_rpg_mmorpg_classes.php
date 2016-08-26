<?php namespace Rpg\Mmorpg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRpgMmorpgClasses extends Migration
{
    public function up()
    {
        Schema::create('rpg_mmorpg_classes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->integer('strength');
            $table->integer('dexterity');
            $table->integer('vitality');
            $table->integer('education');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rpg_mmorpg_classes');
    }
}
