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

        if ($user) {
            return Organization::where('user_id', $user->id)
                ->latest()->take(3)->get();
        }

        return [];
    }

    public function getTotalOrganizations()
    {
        $user = User::first();

        if ($user) {
            return Organization::where('user_id', $user->id)->count();
        }

        return 0;
    }

    public function getAllOrganizations()
    {
        $user = User::first();

        if ($user) {
            return Organization::where('user_id', $user->id)->get();
        }

        return [];
    }
}
