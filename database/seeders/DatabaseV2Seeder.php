<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\v2\User;
use App\Models\v2\MyStoryTraining;
use App\Models\v2\LearningPathUser;
use App\Models\v2\RentedProduction;
use App\Models\v2\Chapter;
use App\Models\v2\Production;
use App\Models\v2\LearningPathMedal;
use App\Models\v2\AsyncSession;
use App\Models\v2\Tenant;
use App\Models\v2\Company;
use App\Models\v2\Role;

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
