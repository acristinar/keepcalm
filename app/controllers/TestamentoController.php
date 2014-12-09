
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
            $causaMorte = Input::get('causaMorte');
            $igrejaEnterro = Input::get('igrejaEnterro');
            $habitoEnterro = Input::get('habitoEnterro');
            $sexo = Input::get('sexo');
            $naturalidade = Input::get('naturalidade');
            $ocupacao = Input::get('ocupacao');
            $moradia = Input::get('moradia');
            $testamenteiro = Input::get('testamenteiro');
            $relacaoTestamenteiro= Input::get('relacaoTestamenteiro');



            $testamento = new Testamento();
            $testamento->nome = $nome;
            $testamento->data = $data;
            $testamento->condSocial = $condSocial;
            $testamento->tituloSocial = $tituloSocial;
            $testamento->causaMorte = $causaMorte;
            $testamento->igrejaEnterro = $igrejaEnterro;
            $testamento->habitoEnterro = $habitoEnterro;
            $testamento->sexo = $sexo;
            $testamento->naturalidade = $naturalidade;
            $testamento->ocupacao = $ocupacao;
            $testamento->moradia = $moradia;
            $testamento->testamenteiro = $testamenteiro;
            $testamento->relacaoTestamenteiro = $relacaoTestamenteiro;

            $testamento->save();
        }

        $this->layout->content = View::make('testamento.insert');
    }
} 