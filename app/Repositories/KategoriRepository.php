<?php

namespace App\Repositories;

use App\Models\Kategori;
use InfyOm\Generator\Common\BaseRepository;

class KategoriRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Kategori::class;
    }
}
