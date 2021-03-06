<?php namespace Rpg\Mmorpg\Models;

use Model;
use Rpg\Mmorpg\Models\Planet;

/**
 * Model
 */
class Race extends Model
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
    public $table = 'rpg_mmorpg_races';
    
    public $belongsTo = ['planet' => 'Rpg\Mmorpg\Models\Planet'];
    
}