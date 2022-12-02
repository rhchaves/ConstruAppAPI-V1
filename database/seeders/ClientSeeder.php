<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'user_id' => 10,
            'full_name' => 'João da Silva',
            'cpf' => '12312312312',
            'phone' => '11912341234',
            'street' => 'Rua Amazonas',
            'number' => '1234',
            'zip' => '09540204',
            'complement' => 'apartamento 12',
            'district' => 'Oswaldo Cruz',
            'city' => 'São Caetano do Sul',
            'state' => 'SP',
        ]);

        Client::create([
            'user_id' => 11,
            'full_name' => 'Maria das Graças',
            'cpf' => '12341234123',
            'phone' => '11956785678',
            'street' => 'Estr. das Lágrimas',
            'number' => '89',
            'zip' => '09581360',
            'complement' => '',
            'district' => 'Jardim Sao Caetano',
            'city' => 'São Caetano do Sul',
            'state' => 'SP',
        ]);

        Client::create([
            'user_id' => 12,
            'full_name' => 'Martin de Oliveira',
            'cpf' => '12341234156',
            'phone' => '11912124545',
            'street' => 'Rua Bel Aliance',
            'number' => '456',
            'zip' => '09581420',
            'complement' => 'casa 2',
            'district' => 'Cerâmica',
            'city' => 'São Caetano do Sul',
            'state' => 'SP',
        ]);
    }
}
