<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\LearningPathUser;
use App\Models\User;

class LearningPathUserFactory extends Factory
{
    protected $model = LearningPathUser::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'path_id' => $this->faker->word,
        ];
    }
}
