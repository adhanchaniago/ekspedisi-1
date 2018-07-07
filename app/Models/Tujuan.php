<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tujuan
 * @package App\Models
 * @version July 7, 2018, 10:53 am UTC
 */
class Tujuan extends Model
{
    use SoftDeletes;

    public $table = 'tujuans';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_barang',
        'penerima',
        'alamat',
        'no_hp'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_barang' => 'integer',
        'penerima' => 'string',
        'alamat' => 'string',
        'no_hp' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_barang' => 'required',
        'penerima' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required'
    ];

    
}
