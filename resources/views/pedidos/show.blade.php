@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pedido #{{ $pedido->id }}</h1>
        <p><strong>Usuário:</strong> {{ $pedido->user->name }}</p>
        <p><strong>Total:</strong> R$ {{ number_format($pedido->total, 2, ',', '.') }}</p>
        <p><strong>Status:</strong> {{ $pedido->status }}</p>
        <a href="{{ route('pedidos.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>
@endsection
