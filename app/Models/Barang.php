<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Barang
 * @package App\Models
 * @version July 7, 2018, 10:44 am UTC
 */
class Barang extends Model
{
    use SoftDeletes;

    public $table = 'barangs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama',
        'barang',
        'berat',
        'no_hp',
        'keterangan',
        'id_kategori'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string',
        'barang' => 'string',
        'berat' => 'double',
        'no_hp' => 'string',
        'keterangan' => 'string',
        'id_kategori' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'barang' => 'required',
        'berat' => 'required',
        'no_hp' => 'required',
        'keterangan' => 'required',
        'id_kategori' => 'required'
    ];

    
}
