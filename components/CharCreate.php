<?php namespace Rpg\Mmorpg\Components;

use Cms\Classes\ComponentBase;
use Rpg\Mmorpg\Models\Race;
use Rpg\Mmorpg\Models\CharClass;

class CharCreate extends ComponentBase
{

	 public $races;
	 public $classes;

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
    
    public function onRun() 
    {
    	  $this->races = $this->page['races'] = Race::with('planet', 'planet.planet_image')->get();
    }
    
    public function onChooseRace()
    {
    		
    	  if(post('race_id')) {
		      $this->classes = $this->page['classes'] = CharClass::whereId(post('race_id'))->with('class_image')->get(); 		    	  
    	  }	
    }

}