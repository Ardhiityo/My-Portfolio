<?php

namespace App\Http\Controllers;

use App\Services\Interface\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct(private ProjectService $projectService) {}

    public function project(Request $request)
    {
        if ($query = $request->query('search')) {
            $projects = $this->projectService->getProjectsByQueryParam($query);
        } else {
            $projects = $this->projectService->getAllProjects();
        }

        return view('pages.project', compact('projects'));
    }
}
