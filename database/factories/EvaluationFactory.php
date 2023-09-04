<?php

namespace Database\Factories;

use App\Models\Evaluation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\evaluation>
 */
class EvaluationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Evaluation::class;

    public function definition()
    {
        return [
            'danger' => $this->faker->text,
            'effects' => $this->faker->text,
            'source' => $this->faker->text,
            'means' => $this->faker->text,
            'individual' => $this->faker->text,
        ];
    }
}
