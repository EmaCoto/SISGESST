<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Evaluation::factory(20)->create();
    }
}
