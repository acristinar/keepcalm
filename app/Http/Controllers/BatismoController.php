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

class BatismoController extends Controller {

    public function __construct(){
        $this->middleware('guest');
    }

    public function insert(Request $request)
    {


        if ($request->has('ano') || $request->has('nome') || $request->has('data') || $request->has('pai') || $request->has('mae') ||
            $request->has('condSocialPais') || $request->has('moradiaPais') || $request->has('padrinho') ||
            $request->has('madrinha') || $request->has('condSocialPadrinhos') || $request->has('moradiaPadrinhos') ) {


            $this->validate($request,[
                'data' => 'date_format:Y-m-j',
                'sexo' => "in:M,F,I"

            ]);

            $testamento = new Testamento();
            $testamento->ano = $request->get('ano');
            $testamento->nome = $request->get('nome');
            $testamento->data = $request->get('data');
            $testamento->sexo = $request->get('sexo');
            $testamento->pai = $request->get('pai');
            $testamento->mae = $request->get('mae');
            $testamento->condSocialPais = $request->get('condSocialPais');
            $testamento->moradiaPais = $request->get('moradiaPais');
            $testamento->padrinho = $request->get('padrinho');
            $testamento->madrinha = $request->get('madrinha');
            $testamento->ocupacao = $request->get('ocupacao');
            $testamento->condSocialPadrinhos = $request->get('condSocialPadrinhos');
            $testamento->moradiaPadrinhos = $request->get('moradiaPadrinhos');

            $testamento->save();

            return view('batismo.insert')->with("success","Batismo inserido com sucesso");


        }
        else return view('batismo.insert');

    }
}