<?php

namespace App\Services\Repository;

use App\Models\User;
use App\Models\Education;
use App\Services\Interface\EducationService;

class EducationRepository implements EducationService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getEducations()
    {
        $user = User::first();

        if ($user) {
            return Education::with('place')
                ->where('user_id', $user->id)
                ->latest()->take(3)->get();
        }

        return [];
    }

    public function getLatestEducation()
    {
        $user = User::first();

        if ($user) {
            return Education::with('place')
                ->where('user_id', $user->id)
                ->latest()->first();
        }

        return [];
    }

    public function getTotalEducations()
    {
        $user = User::first();

        if ($user) {
            return Education::where('user_id', $user->id)->count();
        }

        return 0;
    }

    public function getAllEducations()
    {
        $user = User::first();

        if ($user) {
            return Education::with('place')->where('user_id', $user->id)->get();
        }

        return [];
    }
}
