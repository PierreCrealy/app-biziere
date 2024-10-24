<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'lastname' => 'Pierre',
            'firstname' => 'Bournazel',
            'date_birth' => '2002-09-13',
            'email' => 'pierrebournazel@gmail.com',
            'tel' => '0613242685',

            'status_id' => 2,
            'role_id' => 2,
        ]);

        \App\Models\User::factory()->create([
            'lastname' => 'Lambda',
            'firstname' => 'User',
            'date_birth' => '2002-09-13',
            'email' => 'lambdauser@gmail.com',
            'tel' => '',

            'status_id' => 2,
            'role_id' => 1,
        ]);
    }
}
