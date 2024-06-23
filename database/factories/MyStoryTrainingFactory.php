<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MyStoryTraining;
use App\Models\User;

class MyStoryTrainingFactory extends Factory
{
    protected $model = MyStoryTraining::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'training_date' => $this->faker->dateTime,
        ];
    }
}
