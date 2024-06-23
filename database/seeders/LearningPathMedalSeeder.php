<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LearningPathMedal;

class LearningPathMedalSeeder extends Seeder
{
    public function run()
    {
        LearningPathMedal::factory(5)->create();
    }
}
