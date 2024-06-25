<?php

namespace Database\Factories\v2;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\v2\User;
use App\Models\v2\Role;

class RoleFactory extends Factory
{
    protected $model = Role::class;

    public function definition(): array
    {
        $roles = ['Admin', 'Manager', 'User', 'Guest', 'Editor', 'Moderator'];
        $role = $this->faker->randomElement($roles);

        return [
            'name' => $role,
        ];
    }
}
