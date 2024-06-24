<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\MyStoryTraining;
use App\Models\LearningPathUser;
use App\Models\RentedProduction;
use App\Models\Chapter;
use App\Models\Production;
use App\Models\LearningPathMedal;
use App\Models\AsyncSession;
use App\Models\Tenant;
use App\Models\Company;
use App\Models\Role;

class DatabaseV2Seeder extends Seeder
{
    public function run()
    {
        User::factory(10)->create()->each(function ($user) {
            MyStoryTraining::factory(3)->create(['user_id' => $user->id]);
            LearningPathUser::factory(2)->create(['user_id' => $user->id]);
            RentedProduction::factory(2)->create(['user_id' => $user->id]);
            Chapter::factory(1)->create(['user_id' => $user->id]);
            Production::factory(1)->create(['user_id' => $user->id]);
            LearningPathMedal::factory(1)->create(['user_id' => $user->id]);
            AsyncSession::factory(1)->create(['user_id' => $user->id]);
        });

        Tenant::factory(5)->create();
        Company::factory(4)->create();
        Role::factory(3)->create();
    }
}
