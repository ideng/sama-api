<?php

namespace Database\Seeders;

use App\Models\Subtodo;
use App\Models\Todo;
use Illuminate\Database\Seeder;

class SubtodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subtodo::factory()->count(5)->create();
    }
}
