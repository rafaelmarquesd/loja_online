<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    public function run()
    {
        // Criar produtos de exemplo
        Produto::create([
            'nome' => 'Pizza de Calabresa',
            'descricao' => 'Deliciosa pizza com calabresa e queijo derretido.',
            'preco' => 29.90,
            'imagem' => 'caminho/para/imagem.jpg' // Certifique-se de que o caminho é válido ou pode deixar nulo se não estiver testando imagens.
        ]);

        Produto::create([
            'nome' => 'Hambúrguer Clássico',
            'descricao' => 'Hambúrguer com carne bovina, alface, tomate e molho especial.',
            'preco' => 19.90,
            'imagem' => null
        ]);

        // Adicione mais produtos conforme necessário
    }
}
