<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Table;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Table>
 */
class TableFactory extends Factory
{ 

    protected $model = Table::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'course' => $this->faker->word,
            'grade' => $this->faker->randomElement(['A', 'B', 'C']),
        ];
    }
}
