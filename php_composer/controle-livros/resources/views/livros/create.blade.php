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
            <label for="nome" class="mb-2">Nome do Livro</label>
            <input type="text" class="form-control" placeholder="Título do Livro" aria-label="Título do Livro" aria-describedby="basic"
            name="nome" id="nome">
            <label for="autor" class="mb-2">Nome do Autor</label>
            <input type="text" class="form-control" placeholder="Nome do Autor" aria-label="Autor" aria-describedby="basic"
            name="autor" id="autor">
            <label for="autor" class="mb-2">Editora</label>
            <input type="text" class="form-control" placeholder="Nome da Editora" aria-label="Autor" aria-describedby="basic"
                   name="editora" id="editora"><br>
        </div>
        <button class="btn btn-dark mb-5">Adicionar</button>
    </form>


@endsection

