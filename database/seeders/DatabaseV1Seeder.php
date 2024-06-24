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

class DatabaseV1Seeder extends Seeder
{
    public function run()
    {
        User::factory(10)->create()->each(function ($user) {
            MyStoryTraining::factory(3)->create(['user_id' => $user->id]);
            LearningPathUser::factory(2)->create(['user_id' => $user->id]);
            RentedProduction::factory(2)->create(['user_id' => $user->id]);
        });

        Chapter::factory(10)->create();
        Production::factory(10)->create();
        LearningPathMedal::factory(5)->create();
        AsyncSession::factory(5)->create();
    }
}
