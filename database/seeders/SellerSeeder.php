<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seller;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seller::create([
            'user_id' => 7,
            'fantasyName' => 'Depósito São Caetano',
            'cnpj' => '11111111111111',
            'phone' => '11912345678',
            'street' => 'Alamenda São Caetano',
            'number' => '1234',
            'zip' => '09560500',
            'complement' => '',
            'district' => 'Centro',
            'city' => 'São Caetano do Sul',
            'state' => 'SP',
        ]);

        Seller::create([
            'user_id' => 8,
            'fantasyName' => 'Depósito da Aliança',
            'cnpj' => '22222222222222',
            'phone' => '11987654321',
            'street' => 'Rua Bel Aliance',
            'number' => '34',
            'zip' => '09581420',
            'complement' => '',
            'district' => 'Jardim Sao Caetano',
            'city' => 'São Caetano do Sul',
            'state' => 'SP',
        ]);

        Seller::create([
            'user_id' => 9,
            'fantasyName' => 'Depósito Constru Art',
            'cnpj' => '33333333333333',
            'phone' => '11943215678',
            'street' => 'Rua Eng. Armando de Arruda Pereira',
            'number' => '2512',
            'zip' => '09581160',
            'complement' => '',
            'district' => 'Cerâmica',
            'city' => 'São Caetano do Sul',
            'state' => 'SP',
        ]);
    }
}
