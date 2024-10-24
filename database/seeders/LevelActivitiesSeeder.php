<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\LevelActivities::factory()->create([
            'libelle' => 'Débutant',
        ]);

        \App\Models\LevelActivities::factory()->create([
            'libelle' => 'Intermédiaire',
        ]);

        \App\Models\LevelActivities::factory()->create([
            'libelle' => 'Avancer',
        ]);
    }
}
