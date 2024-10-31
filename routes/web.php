<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Route;

// Página inicial - Exibição de produtos
Route::get('/', [ProdutoController::class, 'index']);

// Exibir detalhes de um produto específico
Route::get('/produto/{id}', [ProdutoController::class, 'show']);

// Rota para criação de pedidos
Route::post('/pedido', [PedidoController::class, 'store']);

// Rotas protegidas para administradores (com middleware de autenticação e verificação de administrador)
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('/admin/produtos', ProdutoController::class);
    Route::resource('/admin/pedidos', PedidoController::class);
});

// Página de boas-vindas
Route::get('/', function () {
    return view('welcome');
});

// Dashboard - acessível apenas para usuários autenticados e verificados
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rotas protegidas para o perfil do usuário
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Inclui as rotas de autenticação geradas pelo Laravel
require __DIR__.'/auth.php';
