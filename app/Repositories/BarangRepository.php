<?php

namespace App\Repositories;

use App\Models\Barang;
use InfyOm\Generator\Common\BaseRepository;

class BarangRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'barang',
        'berat',
        'no_hp',
        'keterangan',
        'id_kategori'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Barang::class;
    }
}
