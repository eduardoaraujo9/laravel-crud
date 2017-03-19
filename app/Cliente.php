<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 3/19/17
 * Time: 4:36 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{
    protected $fillable = [
        'nome',
        'endereco',
        'numero'
    ];

}