<?php namespace Rpg\Mmorpg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRpgMmorpgRaces extends Migration
{
    public function up()
    {
        Schema::table('rpg_mmorpg_races', function($table)
        {
            $table->integer('planet_id');
        });
    }
    
    public function down()
    {
        Schema::table('rpg_mmorpg_races', function($table)
        {
            $table->dropColumn('planet_id');
        });
    }
}
