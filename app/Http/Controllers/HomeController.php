<?php

namespace App\Http\Controllers;

use App\Services\Interface\AboutService;
use App\Services\Interface\CertificationService;
use App\Services\Interface\CourseService;
use App\Services\Interface\EducationService;
use App\Services\Interface\ExperienceService;
use App\Services\Interface\OrganizationService;
use App\Services\Interface\ProfileService;
use App\Services\Interface\ProjectService;
use App\Services\Interface\SkillService;

class HomeController extends Controller
{
    public function __construct(
        private ProfileService $profileService,
        private AboutService $aboutService,
        private ExperienceService $experienceService,
        private EducationService $educationService,
        private CertificationService $certificationService,
        private ProjectService $projectService,
        private SkillService $skillService,
        private CourseService $courseService,
        private OrganizationService $organizationService
    ) {}

    public function home()
    {
        $profile = $this->profileService->getProfile();
        $contact = $this->profileService->getContact();
        $about = $this->aboutService->getAbout();
        $experiences = $this->experienceService->getExperiences();
        $educations = $this->educationService->getEducations();
        $latestEducation = $this->educationService->getLatestEducation();
        $certifications = $this->certificationService->getCertifications();
        $projects = $this->projectService->getProjects();
        $skills = $this->skillService->getSkills();
        $courses = $this->courseService->getCourses();
        $organizations = $this->organizationService->getOrganizations();

        $totalExperiences = $this->experienceService->getTotalExperirences();
        $totalEducations = $this->educationService->getTotalEducations();
        $totalCertifications = $this->certificationService->getTotalCertifications();
        $totalProjects = $this->projectService->getTotalProjects();
        $totalSkills = $this->skillService->getTotalSkills();
        $totalCourses = $this->courseService->getTotalCourses();
        $totalOrganizations = $this->organizationService->getTotalOrganizations();

        return view(
            'pages.home',
            compact(
                'profile',
                'contact',
                'about',
                'experiences',
                'educations',
                'latestEducation',
                'certifications',
                'projects',
                'skills',
                'courses',
                'organizations',
                'totalExperiences',
                'totalEducations',
                'totalCertifications',
                'totalProjects',
                'totalSkills',
                'totalCourses',
                'totalOrganizations'
            )
        );
    }
}
