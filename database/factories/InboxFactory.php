<?php

namespace Database\Factories;

use App\Models\Inbox;
use Illuminate\Database\Eloquent\Factories\Factory;

class InboxFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inbox::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => mt_rand(1,2),
            'slug' => $this->faker->sentence(mt_rand(1,2)),
            'name' => $this->faker->name(),
            'subject' => $this->faker->sentence(mt_rand(1,2)),
            'excerpt' => $this->faker->sentence(mt_rand(1,20)),
            'message' => $this->faker->paragraph(mt_rand(5,40)),
        ];
    }
}
