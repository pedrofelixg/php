@extends('layout')

@section('cabecalho')
    ADIÇÃO À LISTA
@endsection

@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post">
        @csrf
        <div class="form-group">
            <label for="nome" class="">Nome do Livro</label>
            <input type="text" class="form-control" placeholder="Título do Livro" aria-label="Título do Livro" aria-describedby="basic"
            name="nome" id="nome">
        </div>
        <button class="btn btn-dark mb-2">Adicionar</button>
    </form>


@endsection

