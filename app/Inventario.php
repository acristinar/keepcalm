<?php
/**
 * Created by PhpStorm.
 * User: Amanda
 * Date: 09/10/2015
 * Time: 00:44
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventario extends Model
{
    use SoftDeletes;

    protected $table = 'inventario';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    public $timestamps = false;

    public function pessoa()
    {
        return $this->belongsTo('App\Pessoa', 'pessoa_id');
    }

    /* public function pessoas(){
        return $this->belongsToMany('App\Pessoa');
    } */

}