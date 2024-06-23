<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RentedProduction;

class RentedProductionSeeder extends Seeder
{
    public function run()
    {
        RentedProduction::factory(10)->create();
    }
}
