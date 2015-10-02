<?php
/**
 * Created by PhpStorm.
 * User: Amanda
 * Date: 27/10/2014
 * Time: 19:15
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Batismo extends Model
{
    use SoftDeletes;

    protected $table = 'batismo';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

}