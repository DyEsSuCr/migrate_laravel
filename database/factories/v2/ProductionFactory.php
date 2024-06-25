<?php

namespace Database\Factories\v2;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\v2\Production;
use App\Models\v2\User;

class ProductionFactory extends Factory
{
    protected $model = Production::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence,
            'genre' => $this->faker->word,
        ];
    }
}
