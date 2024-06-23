<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RentedProduction;
use App\Models\User;

class RentedProductionFactory extends Factory
{
    protected $model = RentedProduction::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'rental_date' => $this->faker->dateTime,
        ];
    }
}
