<?php
/**
 * Created by PhpStorm.
 * User: Amanda
 * Date: 01/10/2014
 * Time: 11:18
 */

class ErroController extends BaseController {
    protected $layout = 'pai';

    public function mostrarErro()
    {
        $this->layout->content = View::make('filho');
    }
}