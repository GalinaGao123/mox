<?php namespace Gasper\Mox\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
        'title' => 'required'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gasper_mox_categories';

    public $hasMany = [
        'movies' => 'Gasper\Mox\Models\Movie'
    ];
}
