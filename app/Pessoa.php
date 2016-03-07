<?php
/**
 * Created by PhpStorm.
 * User: Amanda
 * Date: 04/02/2016
 * Time: 21:39
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa extends Model
{
    use SoftDeletes;

    protected $table = 'pessoa';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    public $timestamps = false;

    public function inventario()
    {
        return $this->belongsToMany('App\Inventario');
    }

    /* public function inventarios()
    {
        return $this->belongsToMany('App\Inventario');
    } */
}