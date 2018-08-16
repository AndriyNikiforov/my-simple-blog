<?php

namespace App\Repositories;

use App\Models\PostAuthor;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PostAuthorRepository
 * @package App\Repositories
 * @version August 15, 2018, 1:13 pm UTC
 *
 * @method PostAuthor findWithoutFail($id, $columns = ['*'])
 * @method PostAuthor find($id, $columns = ['*'])
 * @method PostAuthor first($columns = ['*'])
*/
class PostAuthorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'author_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PostAuthor::class;
    }
}
