<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Status::factory()->create([
            'libelle' => 'En attente',
        ]);

        \App\Models\Status::factory()->create([
            'libelle' => 'Accepter',
        ]);

        \App\Models\Status::factory()->create([
            'libelle' => 'Refuser',
        ]);
    }
}
