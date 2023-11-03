<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seeder -> data udah pasti
        DB::table('categories')->insert([
            'name' => 'Romance'
        ]);

        DB::table('categories')->insert([
            'name' => 'Action'
        ]);

        DB::table('categories')->insert([
            'name' => 'Adventure'
        ]);
    }
}
