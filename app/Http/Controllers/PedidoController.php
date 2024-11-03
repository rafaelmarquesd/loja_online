<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    // Lista todos os pedidos
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }

    // Exibe o formulário para criar um novo pedido
    public function create()
    {
        return view('pedidos.create');
    }

    // Armazena um novo pedido no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'total' => 'required|numeric',
            'status' => 'required'
        ]);

        $pedido = new Pedido();
        $pedido->user_id = $request->user_id;
        $pedido->total = $request->total;
        $pedido->status = $request->status;
        $pedido->save();

        return redirect()->route('pedidos.index')->with('success', 'Pedido criado com sucesso!');
    }

    // Exibe um pedido específico
    public function show($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.show', compact('pedido'));
    }

    // Exibe o formulário para editar um pedido
    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.edit', compact('pedido'));
    }

    // Atualiza um pedido no banco de dados
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'total' => 'required|numeric',
            'status' => 'required'
        ]);

        $pedido = Pedido::findOrFail($id);
        $pedido->user_id = $request->user_id;
        $pedido->total = $request->total;
        $pedido->status = $request->status;
        $pedido->save();

        return redirect()->route('pedidos.index')->with('success', 'Pedido atualizado com sucesso!');
    }

    // Remove um pedido do banco de dados
    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();

        return redirect()->route('pedidos.index')->with('success', 'Pedido excluído com sucesso!');
    }
}
