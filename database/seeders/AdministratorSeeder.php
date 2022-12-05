<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Administrator;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Administrator::create([
            'user_id' => 1,
            'full_name' => 'Master Admin',
            'cpf' => '11111111111',
            'type_admin' => 1,
        ]);

        Administrator::create([
            'user_id' => 2,
            'full_name' => 'Product Admin',
            'cpf' => '22222222222',
            'type_admin' => 3,
        ]);

        Administrator::create([
            'user_id' => 3,
            'full_name' => 'Seller Admin',
            'cpf' => '33333333333',
            'type_admin' => 4,
        ]);

        Administrator::create([
            'user_id' => 4,
            'full_name' => 'Client Admin',
            'cpf' => '44444444444',
            'type_admin' => 5,
        ]);

        Administrator::create([
            'user_id' => 5,
            'full_name' => 'Rodolfo Chaves',
            'cpf' => '55555555555',
            'type_admin' => 2,
        ]);

        Administrator::create([
            'user_id' => 6,
            'full_name' => 'Vinicius Araújo',
            'cpf' => '66666666666',
            'type_admin' => 2,
            'status' => 'inativo',
        ]);
    }
}
