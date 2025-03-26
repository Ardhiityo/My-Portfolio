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

        return Education::with('place')
            ->where('user_id', $user->id)
            ->latest()->take(3)->get();
    }

    public function getLatestEducation()
    {
        $user = User::first();

        return Education::with('place')
            ->where('user_id', $user->id)
            ->latest()->first();
    }

    public function getTotalEducations()
    {
        return Education::count();
    }

    public function getAllEducations()
    {
        return Education::with('place')->get();
    }
}
