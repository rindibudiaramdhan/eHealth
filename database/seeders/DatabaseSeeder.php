<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Operator',
            'email' => 'operator@ehealth.test',
            'role' => 'operator',
            'password' => '$2y$12$oRX1u0.tmL0VwXFY66U9buwfvQWixU6DrsIWjqF0QhF0JxwkjAnG.'
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@ehealth.test',
            'role' => 'admin',
            'password' => '$2y$12$oRX1u0.tmL0VwXFY66U9buwfvQWixU6DrsIWjqF0QhF0JxwkjAnG.'
        ]);

        $this->call(PatientsTableSeeder::class);
        $this->call(PolisTableSeeder::class);
    }
}
