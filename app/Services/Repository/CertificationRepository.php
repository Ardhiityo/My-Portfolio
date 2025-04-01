<?php

namespace App\Services\Repository;

use App\Models\Certification;
use App\Models\User;
use App\Services\Interface\CertificationService;

class CertificationRepository implements CertificationService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getCertifications()
    {
        $user = User::first();

        if ($user) {
            return Certification::with('user')
                ->where('user_id', $user->id)
                ->latest()->take(3)->get();
        }

        return [];
    }

    public function getTotalCertifications()
    {
        $user = User::first();

        if ($user) {
            return Certification::where('user_id', $user->id)->count();
        }

        return 0;
    }

    public function getAllCertifications()
    {
        $user = User::first();

        if ($user) {
            return Certification::with('place')->where('user_id', $user->id)->get();
        }
    }
}
