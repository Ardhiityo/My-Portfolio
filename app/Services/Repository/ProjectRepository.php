<?php

namespace App\Services\Repository;

use App\Models\User;
use App\Models\Project;
use App\Services\Interface\ProjectService;

class ProjectRepository implements ProjectService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getProjects()
    {
        $user = User::first();

        if ($user) {
            return Project::where('user_id', $user->id)
                ->latest()->take(3)->get();
        }

        return [];
    }

    public function getTotalProjects()
    {
        $user = User::first();

        if ($user) {
            return Project::where('user_id', $user->id)->count();
        }

        return 0;
    }

    public function getAllProjects()
    {
        $user = User::first();

        if ($user) {
            return Project::where('user_id', $user->id)->get();
        }

        return [];
    }

    public function getProjectsByQueryParam(string $queryParam)
    {
        $user = User::first();

        if ($user) {
            return Project::where('user_id', $user->id)
                ->where('title', 'like', '%' . $queryParam . '%')
                ->get();
        }

        return [];
    }
}
