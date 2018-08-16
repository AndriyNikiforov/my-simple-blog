<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PostAuthor
 * @package App\Models
 * @version August 15, 2018, 1:13 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection comments
 * @property integer author_id
 */
class PostAuthor extends Model
{
    use SoftDeletes;

    public $table = 'post_authors';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'author_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'author_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
