<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Administradores

        User::create([
            'name' => 'Master Admin',
            'email' => 'master.admin@gmail.com',
            'password' => bcrypt('123'),
            'userType' => 1,
            // id 1
        ]);

        User::create([
            'name' => 'Product Admin',
            'email' => 'product.admin@gmail.com',
            'password' => bcrypt('123'),
            'userType' => 1,
            // id 2
        ]);

        User::create([
            'name' => 'Seller Admin',
            'email' => 'seller.admin@gmail.com',
            'password' => bcrypt('123'),
            'userType' => 1,
            // id 3
        ]);

        User::create([
            'name' => 'Client Admin',
            'email' => 'client.admin@gmail.com',
            'password' => bcrypt('123'),
            'userType' => 1,
            // id 4
        ]);

        User::create([
            'name' => 'Rodolfo Chaves',
            'email' => 'rodolfo@gmail.com',
            'password' => bcrypt('123'),
            'userType' => 1,
            // id 5
        ]);

        User::create([
            'name' => 'Vinicius Araújo',
            'email' => 'vinicius@gmail.com',
            'password' => bcrypt('123'),
            'userType' => 1,
            // id 6
        ]);

        //  Vendedores

        User::create([
            'name' => 'deposito sao caetano',
            'email' => 'deposito.sao.caetano@gmail.com',
            'password' => bcrypt('123'),
            'userType' => 2,
            // id 7
        ]);

        User::create([
            'name' => 'Depósito da Aliança',
            'email' => 'depositoalianca@gmail.com',
            'password' => bcrypt('123'),
            'userType' => 2,
            // id 8
        ]);

        User::create([
            'name' => 'deposito constru art',
            'email' => 'construart@gmail.com',
            'password' => bcrypt('123'),
            'userType' => 2,
            // id 9
        ]);

        // Clientes

        User::create([
            'name' => 'João da Silva',
            'email' => 'joaosilva@gmail.com',
            'password' => bcrypt('123'),
            'userType' => 3,
            // id 10
        ]);

        User::create([
            'name' => 'Maria das Graças',
            'email' => 'mariadasgracas@gmail.com',
            'password' => bcrypt('123'),
            'userType' => 3,
            // id 11
        ]);

        User::create([
            'name' => 'Martin de Oliveira',
            'email' => 'martin.oliveira@gmail.com',
            'password' => bcrypt('123'),
            'userType' => 3,
            // id 12
        ]);

        User::create([
            'name' => 'Usuário Teste',
            'email' => 'testes',
            'password' => bcrypt('123'),
            'userType' => 3,
            // id 13
        ]);
    }
}
