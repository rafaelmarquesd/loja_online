@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $produto->nome }}</h1>
        <p><strong>Descrição:</strong> {{ $produto->descricao }}</p>
        <p><strong>Preço:</strong> R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
        @if($produto->imagem)
            <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome }}" style="max-width: 300px;">
        @endif
        <a href="{{ route('produtos.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>
@endsection
