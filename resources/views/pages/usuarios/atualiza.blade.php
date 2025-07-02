@extends('index')

@section('content')

    <form class="form" method="POST" action="{{ route('atualizar.usuario', $findUsuario->id) }}">
        @csrf
        @method('PUT')

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Editar usuário</h1>
        </div>

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" value="{{ isset($findUsuario->name) ? $findUsuario->name : old('name') }}" class="form-control @error('name') is-invalid @enderror" name="name">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">E-mail</label>
            <input value="{{ isset($findUsuario->email) ? $findUsuario->email : old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Nova Senha</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
    </form>

@endsection
