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

    public function getEducation()
    {
        $user = User::first();

        return Education::with('place')
            ->where('user_id', $user->id)->first();
    }
}
