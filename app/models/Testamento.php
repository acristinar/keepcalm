<?php
/**
 * Created by PhpStorm.
 * User: Amanda
 * Date: 27/10/2014
 * Time: 19:15
 */

    use Illuminate\Database\Eloquent\SoftDeletingTrait;

    class Testamento extends Eloquent{

        use SoftDeletingTrait;

        protected $table = 'testamento';

        protected $dates = ['deleted_at'];

    }