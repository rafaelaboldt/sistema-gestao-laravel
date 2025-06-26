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
                'nome' => 'Nicole Maron',
                'email' => 'nicole@gmail.com',
                'endereco' => 'rua x',
                'logradouro' => 'rua x',
                'cep' => '217900',
                'bairro' => 'bairro x',
            ]
        );

        Cliente::create(
            [
                'nome' => 'Gabriela Boldt',
                'email' => 'ggabiboldt@gmail.com',
                'endereco' => 'rua x',
                'logradouro' => 'rua x',
                'cep' => '217900',
                'bairro' => 'bairro x',
            ]
        );
    }
}
