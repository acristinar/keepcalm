<?php
/**
 * Created by PhpStorm.
 * User: Amanda
 * Date: 27/10/2014
 * Time: 19:19
 */

namespace App\Http\Controllers;

use App\Testamento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;
use Illuminate\Routing\UrlGenerator;

class TestamentoController extends Controller {

    public function __construct(){
        $this->middleware('guest');
    }

    public function insert(Request $request)
    {


        if ($request->has('nome') || $request->has('data') || $request->has('condSocial') || $request->has('tituloSocial') ||
            $request->has('causaMorte') || $request->has('igrejaEnterro') || $request->has('habitoEnterro') ||
            $request->has('naturalidade') || $request->has('ocupacao') || $request->has('moradia') || $request->has('testamenteiro')
            || $request->has('relacaoTestamenteiro') ) {


            $this->validate($request,[
                'data' => 'date_format:Y-m-j',
                'sexo' => "in:M,F,I"

            ]);



            /*
            $nome = $request->input('nome');
            $data = $request->input('data');
            $condSocial = $request->input('condSocial');
            $tituloSocial = $request->input('tituloSocial');
            $causaMorte = $request->input('causaMorte');
            $igrejaEnterro = $request->input('igrejaEnterro');
            $habitoEnterro = $request->input('habitoEnterro');
            $sexo = $request->input('sexo');
            $naturalidade = $request->input('naturalidade');
            $ocupacao = $request->input('ocupacao');
            $moradia = $request->input('moradia');
            $testamenteiro = $request->input('testamenteiro');
            $relacaoTestamenteiro = $request->input('relacaoTestamenteiro');

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

                return view('testamento.insert')->with("success","Testamento inserido com sucesso");
            }
            elseif ($validator->fails()) {
                return view('testamento.insert')->withErrors($validator);
            }
            */

            $testamento = new Testamento();
            $testamento->nome = $request->get('nome');
            $testamento->data = $request->get('data');
            $testamento->condSocial = $request->get('condSocial');
            $testamento->tituloSocial = $request->get('tituloSocial');
            $testamento->causaMorte = $request->get('causaMorte');
            $testamento->igrejaEnterro = $request->get('igrejaEnterro');
            $testamento->habitoEnterro = $request->get('habitoEnterro');
            $testamento->sexo = $request->get('sexo');
            $testamento->naturalidade = $request->get('naturalidade');
            $testamento->ocupacao = $request->get('ocupacao');
            $testamento->moradia = $request->get('moradia');
            $testamento->testamenteiro = $request->get('testamenteiro');
            $testamento->relacaoTestamenteiro = $request->get('relacaoTestamenteiro');

            $testamento->save();

            return view('testamento.insert')->with("success","Testamento inserido com sucesso");


        }
        else return view('testamento.insert');

    }

    public function find($id = null){

        if($id == null) {
            $testamentos = Testamento::all();
            return view('testamento.find', ['testamentos' => $testamentos]);

        }else{
            $testamento = Testamento::find($id);
            return view('testamento.read', ['testamento' => $testamento]);
        }


    }

    public function erase(Request $request, $id){
        $testamento = Testamento::find($id);

        //var_dump($testamento);

        $url = action('TestamentoController@find');
        if ($request->server('HTTP_REFERER') == $url) {
            $testamento->delete();

            return back()->with('success', 'Testamento apagado com sucesso.');
        } else {
            return redirect("/");
        }
    }

    public function update(Request $request, $id){

        $testamento = Testamento::find($id);

        $alterou = false;

        //var_dump($testamento);

        if(($request->has('nome')) && ($request->input('nome') != $testamento->nome)){

            $testamento->nome = $request->input('nome');
            $alterou = true;
        }
        if(($request->has('data')) && ($request->input('data') != $testamento->data)){

            $testamento->data = $request->input('data');
            $alterou = true;
        }
        if(($request->has('condSocial')) && ($request->input('condSocial') != $testamento->condSocial)){

            $testamento->condSocial = $request->input('condSocial');
            $alterou = true;
        }
        if(($request->has('tituloSocial')) && ($request->input('tituloSocial') != $testamento->tituloSocial)){

            $testamento->tituloSocial = $request->input('tituloSocial');
            $alterou = true;
        }
        if(($request->has('causaMorte')) && ($request->input('causaMorte') != $testamento->causaMorte)){

            $testamento->causaMorte = $request->input('causaMorte');
            $alterou = true;
        }
        if(($request->has('igrejaEnterro')) && ($request->input('igrejaEnterro') != $testamento->igrejaEnterro)){

            $testamento->igrejaEnterro = $request->input('igrejaEnterro');
            $alterou = true;
        }
        if(($request->has('habitoEnterro')) && ($request->input('habitoEnterro') != $testamento->habitoEnterro)){

            $testamento->habitoEnterro = $request->input('habitoEnterro');
            $alterou = true;
        }
        if(($request->has('sexo')) && ($request->input('sexo') != $testamento->sexo)){

            $testamento->sexo = $request->input('sexo');
            $alterou = true;
        }
        if(($request->has('naturalidade')) && ($request->input('naturalidade') != $testamento->naturalidade)){

            $testamento->naturalidade = $request->input('naturalidade');
            $alterou = true;
        }
        if(($request->has('ocupacao')) && ($request->input('ocupacao') != $testamento->ocupacao)){

            $testamento->ocupacao = $request->input('ocupacao');
            $alterou = true;
        }
        if(($request->has('moradia')) && ($request->input('moradia') != $testamento->moradia)){

            $testamento->moradia = $request->input('moradia');
            $alterou = true;
        }
        if(($request->has('testamenteiro')) && ($request->input('testamenteiro') != $testamento->testamenteiro)){

            $testamento->testamenteiro = $request->input('testamenteiro');
            $alterou = true;
        }
        if(($request->has('relacaoTestamenteiro')) && ($request->input('relacaoTestamenteiro') != $testamento->relacaoTestamenteiro)){

            $testamento->relacaoTestamenteiro = $request->input('relacaoTestamenteiro');
            $alterou = true;
        }

        if($alterou){
            $testamento->save();
            return view('testamento.read', ['testamento' => $testamento]);
        }
        else return view('testamento.update', ['testamento' => $testamento]);


    }


} 