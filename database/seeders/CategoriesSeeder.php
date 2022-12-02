<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create([
            // id 1
            'name' => 'construcao',
        ]);

        Categories::create([
            // id 2
            'name' => 'eletrica',
        ]);

        Categories::create([
            // id 3
            'name' => 'hidraulica',
        ]);

        Categories::create([
            // id 4
            'name' => 'ferragens',
        ]);

        Categories::create([
            // id 5
            'name' => 'tintas',
        ]);

        Categories::create([
            // id 6
            'name' => 'ferramentas',
        ]);

        Categories::create([
            // id 7
            'name' => 'outros',
        ]);
    }
}
