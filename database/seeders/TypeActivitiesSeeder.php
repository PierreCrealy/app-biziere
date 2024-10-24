<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\TypeActivities::factory()->create([
            'libelle' => 'Balade',
        ]);

        \App\Models\TypeActivities::factory()->create([
            'libelle' => 'Trotting',
        ]);

        \App\Models\TypeActivities::factory()->create([
            'libelle' => 'Désensibilisation',
        ]);
    }
}
