<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ActivitiesRegistrations;
use App\Models\MedicalRegistrations;
use App\Models\Status;
use App\Models\WorkRegistrations;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            SettingSeeder::class,
            RoleSeeder::class,
            StatusSeeder::class,
            UserSeeder::class,

            AnnouncementSeeder::class,
            MedicalSeeder::class,
            WorkSeeder::class,
            HorseSeeder::class,

            LevelActivitiesSeeder::class,
            TypeActivitiesSeeder::class,
            ActivitiesSeeder::class,

            ActivitiesRegistrationsSeeder::class,
            MedicalRegistrationsSeeder::class,
            WorkRegistrationsSeeder::class,
            AvailabilitySeeder::class,

        ]);
    }
}
