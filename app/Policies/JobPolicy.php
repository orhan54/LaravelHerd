<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Job;
use App\Models\User;

class JobPolicy
{
    public function edit(User $user, Job $job)
    {
        return $job->employer->user->is($user);
    }
}
