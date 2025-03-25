<?php

namespace App\Services\Repository;

use App\Models\User;
use App\Models\About;
use App\Services\Interface\AboutService;;
class AboutRepository implements AboutService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAbout()
    {
        $user = User::first();

        return About::where('user_id', $user->id)->first();
    }
}
