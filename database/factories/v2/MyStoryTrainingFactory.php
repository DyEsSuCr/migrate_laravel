<?php

namespace Database\Factories\v2;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\v2\MyStoryTraining;
use App\Models\v2\User;

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
