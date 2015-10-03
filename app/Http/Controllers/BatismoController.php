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

class BatismoController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function insert(Request $request)
    {


        if ($request->has('nome') || $request->has('data') || $request->has('pai') || $request->has('mae') ||
            $request->has('condSocialPai') || $request->has('condSocialMae') || $request->has('moradiaPai') || $request->has('moradiaMae') || $request->has('padrinho') ||
            $request->has('madrinha') || $request->has('condSocialPadrinho') || $request->has('condSocialMadrinha') || $request->has('moradiaPadrinho') || $request->has('moradiaMadrinha')
        ) {


            $this->validate($request, [
                'data' => 'date_format:Y-m-j',
                'sexo' => "in:M,F,I"

            ]);

            $batismos = new Batismo();
            $batismos->nome = $request->get('nome');
            $batismos->data = $request->get('data');
            $batismos->sexo = $request->get('sexo');
            $batismos->pai = $request->get('pai');
            $batismos->mae = $request->get('mae');
            $batismos->condSocialPai = $request->get('condSocialPai');
            $batismos->condSocialMae = $request->get('condSocialMae');
            $batismos->moradiaPai = $request->get('moradiaPai');
            $batismos->moradiaMae = $request->get('moradiaMae');
            $batismos->padrinho = $request->get('padrinho');
            $batismos->madrinha = $request->get('madrinha');
            $batismos->condSocialPadrinho = $request->get('condSocialPadrinho');
            $batismos->condSocialMadrinha = $request->get('condSocialMadrinha');
            $batismos->moradiaPadrinho = $request->get('moradiaPadrinho');
            $batismos->moradiaMadrinha = $request->get('moradiaMadrinha');

            $batismos->save();

            return view('batismo.insert')->with("success", "Batismo inserido com sucesso");


        } else return view('batismo.insert');

    }

    public function find($id = null)
    {
        if ($id == null) {
            $batismos = Batismo::all();
            return view('batismo.find', ['batismos' => $batismos]);
        } else {
            $batismo = Batismo::find($id);
            return view('batismo.read', ['batismo' => $batismo]);
        }
    }

    public function erase(Request $request, $id)
    {
        $batismo = Batismo::find($id);

        $url = action('BatismoController@find');
        if ($request->server('HTTP_REFERER') == $url) {
            $batismo->delete();

            return back()->with('success', 'Batismo apagado com sucesso.');
        } else {
            return redirect("/");
        }
    }

    public function update(Request $request, $id)
    {
        $batismo = Batismo::find($id);

        $alterou = false;

        if(($request->has('nome')) && ($request->input('nome') != $batismo->nome)){

            $batismo->nome = $request->input('nome');
            $alterou = true;
        }
        if(($request->has('data')) && ($request->input('data') != $batismo->data)){

            $batismo->data = $request->input('data');
            $alterou = true;
        }
        if(($request->has('sexo')) && ($request->input('sexo') != $batismo->sexo)){

            $batismo->sexo = $request->input('sexo');
            $alterou = true;
        }
        if(($request->has('nomePai')) && ($request->input('nomePai') != $batismo->nomePai)){

            $batismo->nomePai = $request->input('nomePai');
            $alterou = true;
        }
        if(($request->has('nomeMae')) && ($request->input('nomeMae') != $batismo->nomeMae)){

            $batismo->nomeMae = $request->input('nomeMae');
            $alterou = true;
        }
        if(($request->has('condSocialPai')) && ($request->input('condSocialPai') != $batismo->condSocialPai)){

            $batismo->condSocialPai = $request->input('condSocialPai');
            $alterou = true;
        }
        if(($request->has('condSocialMae')) && ($request->input('condSocialMae') != $batismo->condSocialMae)){

            $batismo->condSocialMae = $request->input('condSocialMae');
            $alterou = true;
        }
        if(($request->has('moradiaMae')) && ($request->input('moradiaMae') != $batismo->moradiaMae)){

            $batismo->moradiaMae = $request->input('moradiaMae');
            $alterou = true;
        }
        if(($request->has('moradiaPai')) && ($request->input('moradiaPai') != $batismo->moradiaPai)){

            $batismo->moradiaPai = $request->input('moradiaPai');
            $alterou = true;
        }
        if(($request->has('nomePadrinho')) && ($request->input('nomePadrinho') != $batismo->nomePadrinho)){

            $batismo->nomePadrinho = $request->input('nomePadrinho');
            $alterou = true;
        }
        if(($request->has('nomeMadrinha')) && ($request->input('nomeMadrinha') != $batismo->nomeMadrinha)){

            $batismo->nomeMadrinha = $request->input('nomeMadrinha');
            $alterou = true;
        }
        if(($request->has('condSocialPadrinho')) && ($request->input('condSocialPadrinho') != $batismo->condSocialPadrinho)){

            $batismo->condSocialPadrinho = $request->input('condSocialPadrinho');
            $alterou = true;
        }
        if(($request->has('condSocialMadrinha')) && ($request->input('condSocialMadrinha') != $batismo->condSocialMadrinha)){

            $batismo->condSocialMadrinha = $request->input('condSocialMadrinha');
            $alterou = true;
        }
        if(($request->has('moradiaPadrinho')) && ($request->input('moradiaPadrinho') != $batismo->moradiaPadrinho)){

            $batismo->moradiaPadrinho = $request->input('moradiaPadrinho');
            $alterou = true;
        }
        if(($request->has('moradiaMadrinha')) && ($request->input('moradiaMadrinha') != $batismo->moradiaMadrinha)){

            $batismo->moradiaMadrinha = $request->input('moradiaMadrinha');
            $alterou = true;
        }
        if($alterou){
            $batismo->save();
            return view('batismo.read', ['batismo' => $batismo]);
        }
        else return view('batismo.update', ['batismo' => $batismo]);

    }
}