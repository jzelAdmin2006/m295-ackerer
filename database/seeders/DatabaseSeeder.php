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
        $tomato = Plant::create([
            'name' => 'Tomate',
            'slug' => 'tomate',
            'description' => 'Tomaten sind Früchte der Tomatenpflanze.',
            'stock' => '10'
        ]);

        $potato = Plant::create([
            'name' => 'Kartoffel',
            'slug' => 'kartoffel',
            'description' => 'Die Kartoffel ist eine Pflanzenart aus der Gattung der Nachtschattengewächse (Solanaceae).',
            'stock' => '20'
        ]);

        Farm::create([
            'name' => 'Acker 1',
            'slug' => 'acker-1',
            'plant_id' => $tomato->id,
            'description' => 'Acker am linken Seeufer',
            'address' => 'Seestrasse 1',
            'city' => 'Luzern',
            'zip' => '6003'
        ]);

        Farm::create([
            'name' => 'Acker 2',
            'slug' => 'acker-2',
            'plant_id' => $potato->id,
            'description' => 'Acker am rechten Seeufer',
            'address' => 'Luzernerweg 2',
            'city' => 'Luzern',
            'zip' => '6003'
        ]);
    }
}
