@extends('layout')

@section('cabecalho')
    Adicionar Série
@endsection

@section('conteudo')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post">
        @csrf
        <div class="form-group">
            <label for="Nome" class="form-label">Nome da Série</label>
            <input type="text" class="form-control mb-2" name="nome" id="Nome">
        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection
