<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LearningPathUser;

class LearningPathUserSeeder extends Seeder
{
    public function run()
    {
        LearningPathUser::factory(10)->create();
    }
}
