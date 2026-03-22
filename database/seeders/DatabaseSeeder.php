<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Crée 10 users, chacun avec un employer et des jobs
        User::factory(100)->create()->each(function ($user) {
            $employer = Employer::factory()->create([
                'user_id' => $user->id,
            ]);

            Job::factory(5)->create([
                'employer_id' => $employer->id,
            ]);
        });

        // User de test
        $user = User::factory()->create([
            'first_name' => 'Test',
            'last_name'  => 'User',
            'email'      => 'test@example.com',
        ]);

        $employer = Employer::factory()->create([
            'user_id' => $user->id,
        ]);

        Job::factory(5)->create([
            'employer_id' => $employer->id,
        ]);
    }
}
