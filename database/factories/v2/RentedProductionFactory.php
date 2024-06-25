<?php

namespace Database\Factories\v2;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\v2\RentedProduction;
use App\Models\v2\User;

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
