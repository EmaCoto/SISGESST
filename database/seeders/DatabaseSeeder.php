<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\user::factory(1)->create();
        \App\Models\Evaluation::factory(3)->create();

        $this->call([
            DeficiencyLevelSeeder::class,
            ExposureLevelSeeder::class,
            ProbabilityLevelSeeder::class,
            ConsequenceLevelSeeder::class,
            RiskLevelSeeder::class,
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
