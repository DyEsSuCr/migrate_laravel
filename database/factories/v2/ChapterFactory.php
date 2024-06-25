<?php

namespace Database\Factories\v2;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\v2\Chapter;
use App\Models\v2\User;

class ChapterFactory extends Factory
{
    protected $model = Chapter::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
        ];
    }
}
