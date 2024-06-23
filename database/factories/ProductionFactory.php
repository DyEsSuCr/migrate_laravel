<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Production;

class ProductionFactory extends Factory
{
    protected $model = Production::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'genre' => $this->faker->word,
        ];
    }
}
