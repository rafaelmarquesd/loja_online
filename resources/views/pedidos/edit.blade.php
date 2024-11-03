@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Pedido</h1>
        <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="user_id">Usuário</label>
                <input type="number" class="form-control" id="user_id" name="user_id" value="{{ $pedido->user_id }}" required>
            </div>
            <div class="form-group">
                <label for="total">Total</label>
                <input type="number" class="form-control" id="total" name="total" step="0.01" value="{{ $pedido->total }}" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" id="status" name="status" value="{{ $pedido->status }}" required>
            </div>
            <button type="submit" class="btn btn-success">Atualizar</button>
        </form>
    </div>
@endsection
