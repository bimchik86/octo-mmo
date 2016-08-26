<?php namespace Rpg\Mmorpg\Models;

use Model;
use Rpg\Mmorpg\Models\Race;

/**
 * Model
 */
class CharClass extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'rpg_mmorpg_classes';
    public $hasOne = ['race' => 'Rpg\Mmorpg\Models\Race'];
	 public $attachOne = ['class_image' => 'System\Models\File'];    
    
    
    public function getRaceIdOptions()
    {
	 	return Race::lists('name');	    
    }
}