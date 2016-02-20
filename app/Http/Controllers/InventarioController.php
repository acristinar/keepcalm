<?php
/**
 * Created by PhpStorm.
 * User: Amanda
 * Date: 27/10/2014
 * Time: 19:19
 */

namespace App\Http\Controllers;

use App\Inventario;
use App\Pessoa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;
use Illuminate\Routing\UrlGenerator;

class InventarioController extends PessoaController
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function insert(Request $request)
    {

        if ($request->has('gastosFunerarios') || $request->has('bens') || $request->has('dividas') || $request->has('divisaoBens'))
        {
            $inventarios = new Inventario();
            $pessoa = new Pessoa();

            $pessoa->nome = $request->get('nome');
            $inventarios->data = $request->get('data');
            $inventarios->gastosFunerarios = $request->get('gastosFunerarios');
            $inventarios->dividas = $request->get('dividas');

            $inventarios->pessoa_id = $this->getPessoa($pessoa->nome);

            $inventarios->save();

            return view('inventario.insert')->with("success", "Inventário inserido com sucesso");


        } else return view('inventario.insert');

    }

    public function find($id = null)
    {
        if ($id == null) {
            $inventarios = Inventario::all();
            return view('inventario.find', ['inventarios' => $inventarios]);
        } else {
            $inventario = Inventario::find($id);
            return view('inventario.read', ['inventario' => $inventario]);
        }
    }

    public function erase(Request $request, $id)
    {
        $inventario = Inventario::find($id);

        $url = action('InventarioController@find');
        if ($request->server('HTTP_REFERER') == $url) {
            $inventario->delete();

            return back()->with('success', 'Inventário apagado com sucesso.');
        } else {
            return redirect("/");
        }
    }

    public function update(Request $request, $id)
    {
        $inventario = Inventario::find($id);

        $alterou = false;

        if (($request->has('gastosFunerarios')) && ($request->input('gastosFunerarios') != $inventario->gastosFunerarios)) {

            $inventario->gastosFunerarios = $request->input('gastosFunerarios');
            $alterou = true;
        }
        if (($request->has('bens')) && ($request->input('bens') != $inventario->bens)) {

            $inventario->bens = $request->input('bens');
            $alterou = true;
        }
        if (($request->has('dividas')) && ($request->input('dividas') != $inventario->dividas)) {

            $inventario->dividas = $request->input('dividas');
            $alterou = true;
        }
        if (($request->has('divisaoBens')) && ($request->input('divisaoBens') != $inventario->divisaoBens)) {

            $inventario->divisaoBens = $request->input('divisaoBens');
            $alterou = true;
        }
        if ($alterou) {
            $inventario->save();
            return view('inventario.read', ['inventario' => $inventario]);
        }
        else return view('inventario.update', ['inventario' => $inventario]);

    }
}