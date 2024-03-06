<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() : array
    {
        return [
            'title'       => fake()->text(10),
            'description' => fake()->paragraph(2),
            'category_id' => Category::inRandomOrder()->first()->id ?? null,
            'completed'   => fake()->randomElement([0, 1]),
            'created_at'  => now(),
            'updated_at'  => now(),
        ];
    }
}
