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

        return Certification::with('user')
            ->where('user_id', $user->id)
            ->latest()->take(3)->get();
    }

    public function getTotalCertifications()
    {
        return Certification::count();
    }

    public function getAllCertifications()
    {
        return Certification::with('place')->get();
    }
}
