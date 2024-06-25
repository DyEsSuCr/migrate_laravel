<?php

namespace Database\Factories\v2;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\v2\LearningPathMedal;
use App\Models\v2\User;

class LearningPathMedalFactory extends Factory
{
    protected $model = LearningPathMedal::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'medal_name' => $this->faker->word,
            'description' => $this->faker->paragraph,
        ];
    }
}
