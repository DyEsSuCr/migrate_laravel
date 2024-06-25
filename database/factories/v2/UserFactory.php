<?php

namespace Database\Factories\v2;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\v2\User;
use App\Models\v2\Role;
use App\Models\v2\Company;
use App\Models\v2\Tenant;

class UserFactory extends Factory

{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),
            'permissions' => $this->faker->boolean ? 'admin' : 'user',
            'trial_ends_at' => now()->addMonth(),
            'role_id' => Role::factory(),
            'company_id' => Company::factory(),
            'tenant_id' => Tenant::factory(),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
