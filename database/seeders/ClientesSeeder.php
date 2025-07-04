<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    public function run(): void
    {
        Cliente::create(
            [
                'nome' => 'Cliente Exemplo 1',
                'email' => 'cliente@gmail.com',
                'endereco' => 'rua x',
                'logradouro' => 'rua x',
                'cep' => '217900',
                'bairro' => 'bairro x',
            ]
        );

        Cliente::create(
            [
                'nome' => 'Cliente Exemplo 2',
                'email' => 'clienteexemplo@gmail.com',
                'endereco' => 'rua x',
                'logradouro' => 'rua x',
                'cep' => '217900',
                'bairro' => 'bairro x',
            ]
        );
    }
}
