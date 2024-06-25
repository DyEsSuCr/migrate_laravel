<?php

namespace Database\Factories\v2;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\v2\LearningPathUser;
use App\Models\v2\User;

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
