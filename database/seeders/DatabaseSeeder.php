<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Farm;
use App\Models\Plant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Plant::factory()->count(20)->create()->each(function ($plant) {
            Farm::factory()->count(random_int(1, 5))->create(['plant_id' => $plant->id]);
        });
    }
}
