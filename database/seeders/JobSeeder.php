<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Job::factory(200)->create();
    }
}
