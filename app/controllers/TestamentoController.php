
<?php
/**
 * Created by PhpStorm.
 * User: Amanda
 * Date: 27/10/2014
 * Time: 19:19
 */

class TestamentoController extends BaseController {

    protected $layout = 'pai';

    public function insert()
    {

        if (Input::has('nome') || Input::has('data') || Input::has('condSocial') || Input::has('tituloSocial') ||
            Input::has('causaMorte') || Input::has('igrejaEnterro') || Input::has('habitoEnterro') ||
            Input::has('naturalidade') || Input::has('ocupacao') || Input::has('moradia') || Input::has('testamenteiro')
            || Input::has('relacaoTestamenteiro') ) {

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
            $relacaoTestamenteiro = Input::get('relacaoTestamenteiro');

            $validator = Validator::make(
                array(
                    'data' => $data,
                    'sexo' => $sexo,
                ),
                array(
                    'data' => 'date_format:Y-m-j',
                    'sexo' => "in:M,F,I",
                )
            );

            if ($validator->passes()) {
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

                $this->layout->content = View::make('testamento.insert')->with("success","Testamento inserido com sucesso");
            }
            elseif ($validator->fails()) {
                $this->layout->content = View::make('testamento.insert')->withErrors($validator);
            }

        }
        else $this->layout->content = View::make('testamento.insert');

    }

    public function find($id = null){

        if($id == null) {
            $testamentos = Testamento::all();
            $this->layout->content = View::make('testamento.find', array('testamentos' => $testamentos));

        }else{
            $testamento = Testamento::find($id);
            $this->layout->content = View::make('testamento.read', array('testamento' => $testamento));
        }


    }

    public function erase($id){
        $testamento = Testamento::find($id);


        $url = action('TestamentoController@find');
        if(URL::previous() == $url){
            $testamento->delete();

            return Redirect::back()->with('success', 'Testamento apagado com sucesso.');
        }
        else {
            return Redirect::to("/");
        }






    }


} 