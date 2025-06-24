@extends('index')

@section('content')

    <form class="form" method="POST" action="{{ route('atualizar.produto', $findProduto->id) }}">
        @csrf
        @method('PUT')

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Editar produto</h1>
        </div>

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" value="{{ isset($findProduto->nome) ? $findProduto->nome : old('nome') }}" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}">
            @error('nome')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Valor</label>
            <input id="mascara_valor" value="{{ isset($findProduto->valor) ? $findProduto->valor : old('valor') }}" type="text" class="form-control @error('valor') is-invalid @enderror" name="valor" value="{{ old('valor') }}">
            @error('valor')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
    </form>

@endsection
