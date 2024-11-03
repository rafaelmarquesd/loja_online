<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Exibir o painel administrativo
    public function index()
    {
    $totalProdutos = \App\Models\Produto::count();
    $totalPedidos = \App\Models\Pedido::count();
    $pedidosPendentes = \App\Models\Pedido::where('status', 'pendente')->count();

    return view('admin.dashboard', compact('totalProdutos', 'totalPedidos', 'pedidosPendentes'));
    }

}
