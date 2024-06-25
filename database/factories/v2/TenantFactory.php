<?php

namespace Database\Factories\v2;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\v2\User;
use App\Models\v2\Company;
use App\Models\v2\Tenant;

class TenantFactory extends Factory
{
    protected $model = Tenant::class;

    public function definition(): array
    {
        return [
            'company_id' => Company::factory(),
            'name' => $this->faker->word,
        ];
    }
}
