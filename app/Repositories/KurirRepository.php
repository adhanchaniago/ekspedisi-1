<?php

namespace App\Repositories;

use App\Models\Kurir;
use InfyOm\Generator\Common\BaseRepository;

class KurirRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'email',
        'no_hp',
        'password'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Kurir::class;
    }
}
