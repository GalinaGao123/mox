<?php namespace Gasper\Mox\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
        'title' => 'required'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gasper_mox_movies';

    public $attachOne = [
        'poster' => 'System\Models\File'
    ];

    public $belongsTo = [
        'category' => 'Gasper\Mox\Models\Category',
        'language' => 'Gasper\Mox\Models\Language'
    ];

    public $belongsToMany = [
        'tags' => ['Gasper\Mox\Models\Tag', 'table' => 'gasper_mox_movie_tag']
    ];
}
