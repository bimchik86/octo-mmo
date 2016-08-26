<?php namespace Rpg\Mmorpg\Components;

use Cms\Classes\ComponentBase;
use Rpg\Mmorpg\Models\Race;

class CharCreate extends ComponentBase
{

	 public $races;

    public function componentDetails()
    {
        return [
            'name'        => 'CharCreate Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    
    public function onRun() {
    	  $this->races = $this->page['races'] = Race::with('planet', 'planet.planet_image')->get();
    }

}