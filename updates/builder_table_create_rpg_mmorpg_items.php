<?php namespace Rpg\Mmorpg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRpgMmorpgItems extends Migration
{
    public function up()
    {
        Schema::create('rpg_mmorpg_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->integer('type_id');
            $table->integer('min_dmg');
            $table->integer('max_dmg');
            $table->integer('str_requred');
            $table->integer('dex_required');
            $table->integer('vit_required');
            $table->integer('edu_required');
            $table->integer('race_required');
            $table->integer('class_required');
            $table->integer('str_bonus');
            $table->integer('dex_bonus');
            $table->integer('vit_bonus');
            $table->integer('edu_bonus');
            $table->decimal('weigth', 10, 2);
            $table->boolean('is_stocked')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rpg_mmorpg_items');
    }
}
