<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category' => mt_rand(1,2),
            'titletask' => mt_rand(1,2),
            'body' => $this->faker->sentence(mt_rand(1,2)),
            'subtask' => $this->faker->sentence(mt_rand(1,2)),
            'priority' => $this->faker->paragraph(mt_rand(2,11)),

        ];
    }
}
