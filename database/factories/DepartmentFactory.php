<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'department_head' => fake()->name(),
            'description' => fake()->sentence(15, true),
            'is_active' => fake()->boolean(10),
            'created_by' => 'SYSTEM_FACTORY',
        ];
    }
}
