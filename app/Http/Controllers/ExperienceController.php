<?php

namespace App\Http\Controllers;

use App\Services\Interface\ExperienceService;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function __construct(private ExperienceService $experienceService) {}

    public function experience()
    {
        $experiences = $this->experienceService->getAllExperiences();

        return view('pages.experience', compact('experiences'));
    }
}
