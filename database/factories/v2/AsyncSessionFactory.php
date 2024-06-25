<?php

namespace Database\Factories\v2;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\v2\AsyncSession;
use App\Models\v2\User;

class AsyncSessionFactory extends Factory
{
    protected $model = AsyncSession::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'session_name' => $this->faker->sentence,
            'session_date' => $this->faker->dateTime,
        ];
    }
}
