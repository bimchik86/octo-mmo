<?php namespace Rpg\Mmorpg;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    		return [ 'Rpg\Mmorpg\Components\CharCreate' => 'CharCreate' ];
    }

    public function registerSettings()
    {
    }
}
