<?php

namespace App\Repositories;

use App\Models\Tujuan;
use InfyOm\Generator\Common\BaseRepository;

class TujuanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_barang',
        'penerima',
        'alamat',
        'no_hp'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tujuan::class;
    }
}
