@extends('layout')

@section('cabecalho')
    Séries
@endsection

@section('conteudo')
    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{$mensagem}}
        </div>
    @endif

    <a href="{{route('criar_serie')}}" class="btn btn-dark mb-2"><i class="far fa-plus-square"></i> Adicionar</a>

    <ul class="list-group">
        @foreach($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center"> {{ $serie->nome }}
                <form method="post" action="/series/remover/{{$serie->id}}" onsubmit="return confirm('Deseja excluir esta série?')">
                    @csrf
                    @method('DELETE') <!-- definitivamente eu não entendi como pegou -->
                    <button class="btn btn-danger btn-sm">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
