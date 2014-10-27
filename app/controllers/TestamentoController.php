<?php
/**
 * Created by PhpStorm.
 * User: Amanda
 * Date: 27/10/2014
 * Time: 19:19
 */

class TestamentoController extends BaseController {

    protected $layout = 'pai';

    public function insert(){

        if ( (   (Input::has('nome')&&(Input::has('data')))&&((Input::has('condSocial')&&(Input::has('tituloSocial'))))))
        {
            $nome = Input::get('nome');
            $data = Input::get('data');
            $condSocial = Input::get('condSocial');
            $tituloSocial = Input::get('tituloSocial');

            $testamento = new Testamento();
            $testamento->nome = $nome;
            $testamento->data = $data;
            $testamento->condSocial = $condSocial;
            $testamento->tituloSocial = $tituloSocial;

            $testamento->save();
        }

        $this->layout->content = View::make('testamento.insert');
    }
} 