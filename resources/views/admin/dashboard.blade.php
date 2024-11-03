<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link para o CSS compilado -->
    <script src="{{ asset('js/app.js') }}" defer></script> <!-- Link para o JavaScript compilado -->
</head>
<body>
    <header style="padding: 20px; background-color: #f8f9fa; text-align: center;">
        <h1>Painel Administrativo</h1>
    </header>

    <nav style="padding: 10px; background-color: #343a40; color: white; text-align: center;">
        <a href="/admin/produtos" style="color: white; margin: 0 10px; text-decoration: none;">Gerenciar Produtos</a>
        <a href="/admin/pedidos" style="color: white; margin: 0 10px; text-decoration: none;">Gerenciar Pedidos</a>
        <a href="/dashboard" style="color: white; margin: 0 10px; text-decoration: none;">Voltar ao Dashboard</a>
    </nav>

    <main style="padding: 20px;">
        <h2>Bem-vindo, Administrador!</h2>
        <p>Aqui você pode gerenciar produtos, acompanhar pedidos e acessar relatórios.</p>

        <section style="margin-top: 30px;">
            <h3>Estatísticas Rápidas:</h3>
            <ul>
                <li>Total de Produtos: {{ $totalProdutos }}</li>
                <li>Total de Pedidos: {{ $totalPedidos }}</li>
                <li>Pedidos Pendentes: {{ $pedidosPendentes }}</li>
            </ul>
        </section>
    </main>

    <footer style="padding: 20px; background-color: #f8f9fa; text-align: center;">
        <p>&copy; {{ date('Y') }} Seu Restaurante. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
