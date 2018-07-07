<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Kurir
 * @package App\Models
 * @version July 7, 2018, 10:46 am UTC
 */
class Kurir extends Model
{
    use SoftDeletes;

    public $table = 'kurirs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama',
        'email',
        'no_hp',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string',
        'email' => 'string',
        'no_hp' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'email' => 'required',
        'no_hp' => 'required',
        'password' => 'required'
    ];

    
}
