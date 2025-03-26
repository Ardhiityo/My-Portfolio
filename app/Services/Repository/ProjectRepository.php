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

        return Project::where('user_id', $user->id)
            ->latest()->take(3)->get();
    }

    public function getTotalProjects()
    {
        return Project::count();
    }

    public function getAllProjects()
    {
        return Project::all();
    }
}
