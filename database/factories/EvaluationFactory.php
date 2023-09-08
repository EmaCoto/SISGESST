<?php

namespace Database\Factories;

use App\Models\Evaluation;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evaluation>
 */
class EvaluationFactory extends Factory
{
    protected $model = Evaluation::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'danger' => $this->faker->text(),
            'effects' => $this->faker->text(),
            'source' => $this->faker->text(),
            'means' => $this->faker->text(),
            'individual' => $this->faker->text(),
            'linked' => $this->faker->randomFloat(3, 0, 1000),
            'contractor' => $this->faker->randomFloat(3, 0, 1000),
            'temporary' => $this->faker->randomFloat(3, 0, 1000),
            'time' => $this->faker->randomFloat(3, 0, 1000),
            'elimination' => $this->faker->text(),
            'substitution'  => $this->faker->text(),
            'engineering_controls'  => $this->faker->text(),
            'administrative_controls'  => $this->faker->text(),
            'personal_protection'  => $this->faker->text(),
        ];
    }
}
