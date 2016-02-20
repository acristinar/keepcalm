<?php
/**
 * Created by PhpStorm.
 * User: Amanda
 * Date: 20/02/2016
 * Time: 18:28
 */

namespace App\Http\Controllers;
use App\Pessoa;
use DB;


class PessoaController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getPessoa($nome){

        $pessoa = new Pessoa();

        $pessoa_id = DB::table('pessoa')
            ->select('id')
            ->where('nome', '=', $nome)
            ->first();

        if ($pessoa_id == null){
            $pessoa->save();
            $this->getPessoa($nome);
        }

        return $pessoa_id->id;
    }
}