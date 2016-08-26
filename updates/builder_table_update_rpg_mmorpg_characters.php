<?php namespace Rpg\Mmorpg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRpgMmorpgCharacters extends Migration
{
    public function up()
    {
        Schema::table('rpg_mmorpg_characters', function($table)
        {
            $table->integer('education');
        });
    }
    
    public function down()
    {
        Schema::table('rpg_mmorpg_characters', function($table)
        {
            $table->dropColumn('education');
        });
    }
}
