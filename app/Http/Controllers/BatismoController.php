<?php
/**
 * Created by PhpStorm.
 * User: Amanda
 * Date: 27/10/2014
 * Time: 19:19
 */

namespace App\Http\Controllers;

use App\Batismo;
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

            $batismo = new Batismo();
            $batismo->ano = $request->get('ano');
            $batismo->nome = $request->get('nome');
            $batismo->data = $request->get('data');
            $batismo->sexo = $request->get('sexo');
            $batismo->pai = $request->get('pai');
            $batismo->mae = $request->get('mae');
            $batismo->condSocialPais = $request->get('condSocialPais');
            $batismo->moradiaPais = $request->get('moradiaPais');
            $batismo->padrinho = $request->get('padrinho');
            $batismo->madrinha = $request->get('madrinha');
            $batismo->condSocialPadrinhos = $request->get('condSocialPadrinhos');
            $batismo->moradiaPadrinhos = $request->get('moradiaPadrinhos');

            $batismo->save();

            return view('batismo.insert')->with("success","Batismo inserido com sucesso");


        }
        else return view('batismo.insert');

    }
}