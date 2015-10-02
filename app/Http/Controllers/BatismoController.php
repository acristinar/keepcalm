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


        if ($request->has('nome') || $request->has('data') || $request->has('pai') || $request->has('mae') ||
            $request->has('condSocialPai')  || $request->has('condSocialMae') || $request->has('moradiaPai') || $request->has('moradiaMae') || $request->has('padrinho') ||
            $request->has('madrinha') || $request->has('condSocialPadrinho') || $request->has('condSocialMadrinha') || $request->has('moradiaPadrinho') || $request->has('moradiaMadrinha') ) {


            $this->validate($request,[
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
            $batismos->moradiaMae= $request->get('moradiaMae');
            $batismos->padrinho = $request->get('padrinho');
            $batismos->madrinha = $request->get('madrinha');
            $batismos->condSocialPadrinho = $request->get('condSocialPadrinho');
            $batismos->condSocialMadrinha = $request->get('condSocialMadrinha');
            $batismos->moradiaPadrinho = $request->get('moradiaPadrinho');
            $batismos->moradiaMadrinha = $request->get('moradiaMadrinha');

            $batismos->save();

            return view('batismo.insert')->with("success","Batismo inserido com sucesso");


        }
        else return view('batismo.insert');

    }

    public function find($id = null){
        if($id == null){
            $batismos = Batismo::all();
            return view('batismo.find',['batismos' => $batismos]);
        }else{
            $batismo = Batismo::find($id);
            return view('batismo.read',['batismo' => $batismo]);
        }
    }
}