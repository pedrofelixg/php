@extends('layout')

@section('cabecalho')
    MINHA LISTA DE DESEJADOS
@endsection

@section('conteudo')
    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <a href="{{route('criar_livros')}}" class="btn btn-dark mb-4"><i class="far fa-plus-square"></i> <b>Adicionar</b></a>

    <div class="row align-items-start">
        <div class="col">Nome do Livro</div>
    </div>
    <ul class="list-group" >
        @foreach($livrosDesejados as $listaLivros)
            <li class="list-group-item d-flex justify-content-between align-items-center">{{$listaLivros->nome}}
                <span class="d-flex">
                    <button href="/livros/{{$listaLivros->id}}/autor" class="btn btn-info btn-sm mr-2"><i class="fas fa-external-link-alt"></i></button>
                    <form method="post" action="/listaLivros/remover/{{$listaLivros->id}}" onsubmit="return confirm('Deseja remover {{ addslashes($listaLivros->nome) }}?')">
                        @csrf
                        @method('DELETE')
                        <button href='/listaLivros/remover/{id}' class="btn btn-danger mr-2"><i class="far fa-trash-alt"></i></button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>
@endsection


