<?php

namespace App\Services\Repository;

use App\Models\User;
use App\Models\Experience;
use App\Services\Interface\ExperienceService;

class ExperienceRepository implements ExperienceService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getExperiences()
    {
        $user = User::first();

        return Experience::with('place')
            ->where('user_id', $user->id)
            ->latest()->take(3)->get();
    }

    public function getTotalExperirences()
    {
        return Experience::count();
    }

    public function getAllExperiences()
    {
        return Experience::with('place', 'jobType')->get();
    }
}
