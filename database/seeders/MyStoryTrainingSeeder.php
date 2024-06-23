<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MyStoryTraining;

class MyStoryTrainingSeeder extends Seeder
{
    public function run()
    {
        MyStoryTraining::factory(10)->create();
    }
}
