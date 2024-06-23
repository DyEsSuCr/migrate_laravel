<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\LearningPathMedal;

class LearningPathMedalFactory extends Factory
{
    protected $model = LearningPathMedal::class;

    public function definition()
    {
        return [
            'medal_name' => $this->faker->word,
            'description' => $this->faker->paragraph,
        ];
    }
}
