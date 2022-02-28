@extends('layout')

@section('cabecalho')
    Temporadas de {{$serie->nome}}
@endsection

@section('conteudo')
    <ul class="list-group">
        @foreach($temporadas as $temporada)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="#">Temporada {{$temporada->numero}}</a>
                <button class="btn btn-dark btn-sm">
                    {{$temporada->episodios->count()}}
                </button>
            </li>
        @endforeach
    </ul>
@endsection
