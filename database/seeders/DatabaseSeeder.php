<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Plant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Plant::create([
            'name' => 'Tomate',
            'slug' => 'tomate',
            'description' => 'Tomaten sind Früchte der Tomatenpflanze.',
            'stock' => '10'
        ]);
    }
}
