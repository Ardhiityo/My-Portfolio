<?php

namespace App\Http\Controllers;

use App\Services\Interface\AboutService;
use App\Services\Interface\EducationService;
use App\Services\Interface\ExperienceService;
use App\Services\Interface\ProfileService;

class HomeController extends Controller
{
    public function __construct(
        private ProfileService $profileService,
        private AboutService $aboutService,
        private ExperienceService $experienceService,
        private EducationService $educationService
    ) {}

    public function home()
    {
        $profile = $this->profileService->getProfile();
        $contact = $this->profileService->getContact();
        $about = $this->aboutService->getAbout();
        $experience = $this->experienceService->getExperience();
        $education = $this->educationService->getEducation();

        return view(
            'pages.home',
            compact(
                'profile',
                'contact',
                'about',
                'experience',
                'education'
            )
        );
    }
}
