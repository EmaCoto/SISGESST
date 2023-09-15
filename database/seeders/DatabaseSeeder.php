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

        $this->call([

            //amuna
            ProvinceSeeder::class,
            CitySeeder::class,
            CompanySeeder::class,
            ProcessSeeder::class,
            ActivitySeeder::class,
            TaskSeeder::class,

            //emanuel
            DeficiencyLevelSeeder::class,
            ExposureLevelSeeder::class,
            ProbabilityLevelSeeder::class,
            ConsequenceLevelSeeder::class,
            RiskLevelSeeder::class,
            EvaluationSeeder::class,

        ]);
    }
}
