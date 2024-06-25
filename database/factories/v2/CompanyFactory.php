<?php

namespace Database\Factories\v2;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\v2\User;
use App\Models\v2\Company;

class CompanyFactory extends Factory
{
    protected $model = Company::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
        ];
    }
}
