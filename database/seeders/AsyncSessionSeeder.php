<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AsyncSession;

class AsyncSessionSeeder extends Seeder
{
    public function run()
    {
        AsyncSession::factory(5)->create();
    }
}
