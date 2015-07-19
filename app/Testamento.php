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


class Testamento extends Model
{
    use SoftDeletes;

    protected $table = 'testamento';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

}