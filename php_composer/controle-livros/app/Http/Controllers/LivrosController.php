<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivrosFormRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Livro;

class LivrosController extends Controller
{
    public function  index(Request $request)
    {
        $livrosDesejados = Livro::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');


        return view('livros.index', compact('livrosDesejados', 'mensagem'));
    }

    public function create() {
        return view('livros.create');
    }

    public function store(LivrosFormRequest $request)
    {
        $livro = Livro::create($request->all());
        $request->session()->flash('mensagem',
        "Livro {$livro->id} add com sucesso {$livro->nome}");

        return redirect()->route('listar_livros');
    }

    public function destroy(Request $request)
    {
        Livro::destroy($request->id);
        $request->session()->flash(
            'mensagem',
            "Livro removido com sucesso"
        );
        return redirect()->route('listar_livros');
    }
}
