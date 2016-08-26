<?php namespace Rpg\Mmorpg\Models;

use Model;

/**
 * Model
 */
class Planet extends Model
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
    public $table = 'rpg_mmorpg_planets';
    
    public $attachOne = ['planet_image' => 'System\Models\File'];
}