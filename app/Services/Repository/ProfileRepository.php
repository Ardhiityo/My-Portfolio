<?php

namespace App\Services\Repository;

use App\Models\User;
use App\Models\Contact;
use App\Models\Profile;
use App\Services\Interface\ProfileService;

class ProfileRepository implements ProfileService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getProfile()
    {
        $user = User::first();

        if ($user) {
            return Profile::where('user_id', $user->id)->first();
        }
    }

    public function getContact()
    {
        $user = User::first();

        if ($user) {
            return Contact::with('user')
                ->where('user_id', $user->id)->first();
        }
    }
}
