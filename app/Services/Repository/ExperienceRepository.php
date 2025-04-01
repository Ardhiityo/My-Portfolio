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

        if ($user) {
            return Experience::with('place')
                ->where('user_id', $user->id)
                ->latest()->take(3)->get();
        }

        return [];
    }

    public function getTotalExperirences()
    {
        $user = User::first();

        if ($user) {
            return Experience::where('user_id', $user->id)->count();
        }

        return 0;
    }

    public function getAllExperiences()
    {
        $user = User::first();

        if ($user) {
            return Experience::with('place', 'jobType')->where('user_id', $user->id)->get();
        }

        return [];
    }
}
