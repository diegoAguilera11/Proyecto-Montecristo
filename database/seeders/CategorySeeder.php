<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        Category::create([
            'name' => 'FERRETERIA INDUSTRIAL'
        ]);

        // 2
        Category::create([
            'name' => 'GEOLOGÍA'
        ]);

        // 3
        Category::create([
            'name' => 'ELECTRICIDAD'
        ]);

        // 4
        Category::create([
            'name' => 'ELECTRÓNICA'
        ]);

        // 5
        Category::create([
            'name' => 'ROBÓTICA'
        ]);

        // 6
        Category::create([
            'name' => 'PROTECCIÓN PERSONAL'
        ]);

        // 7
        Category::create([
            'name' => 'MINERÍA'
        ]);

        // 8
        Category::create([
            'name' => 'TORNERÍA'
        ]);
    }
}
