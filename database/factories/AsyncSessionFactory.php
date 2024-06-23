<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AsyncSession;

class AsyncSessionFactory extends Factory
{
    protected $model = AsyncSession::class;

    public function definition()
    {
        return [
            'session_name' => $this->faker->sentence,
            'session_date' => $this->faker->dateTime,
        ];
    }
}
