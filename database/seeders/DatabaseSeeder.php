<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // panggil factory
        \App\Models\Publisher::factory(5)->create();
        \App\Models\Book::factory(5)->create();

        // panggil seeder
        $this->call([
            CategorySeeder::class
        ]);
        
        \App\Models\BookCategory::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
