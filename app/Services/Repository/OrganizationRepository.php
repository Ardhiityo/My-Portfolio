<?php

namespace App\Services\Repository;

use App\Models\User;
use App\Models\Organization;
use App\Services\Interface\OrganizationService;

class OrganizationRepository implements OrganizationService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getOrganizations()
    {
        $user = User::first();

        return Organization::where('user_id', $user->id)
            ->latest()->take(3)->get();
    }

    public function getTotalOrganizations()
    {
        return Organization::count();
    }

    public function getAllOrganizations()
    {
        return Organization::all();
    }
}
