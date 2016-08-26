<?php namespace Rpg\Mmorpg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRpgMmorpgClasses extends Migration
{
    public function up()
    {
        Schema::table('rpg_mmorpg_classes', function($table)
        {
            $table->integer('race_id');
        });
    }
    
    public function down()
    {
        Schema::table('rpg_mmorpg_classes', function($table)
        {
            $table->dropColumn('race_id');
        });
    }
}
