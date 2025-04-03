<?php

namespace App\Providers;

use App\Models\Place;
use App\Models\JobType;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Pronoun;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Certification;
use App\Models\CurriculumVitae;
use App\Observers\PlaceObserver;
use App\Observers\JobTypeObserver;
use App\Observers\ProfileObserver;
use App\Observers\ProjectObserver;
use App\Observers\PronounObserver;
use Illuminate\Support\Facades\URL;
use App\Observers\EducationObserver;
use App\Observers\ExperienceObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\CertificationObserver;
use App\Services\Interface\AboutService;
use App\Services\Interface\SkillService;
use App\Services\Interface\CourseService;
use App\Observers\CurriculumVitaeObserver;
use App\Services\Interface\ProfileService;
use App\Services\Interface\ProjectService;
use App\Services\Interface\EducationService;
use App\Services\Repository\AboutRepository;
use App\Services\Repository\SkillRepository;
use App\Services\Interface\ExperienceService;
use App\Services\Repository\CourseRepository;
use App\Services\Repository\ProfileRepository;
use App\Services\Repository\ProjectRepository;
use App\Services\Interface\OrganizationService;
use App\Services\Interface\CertificationService;
use App\Services\Repository\EducationRepository;
use App\Services\Repository\ExperienceRepository;
use App\Services\Interface\CurriculumVitaeService;
use App\Services\Repository\OrganizationRepository;
use App\Services\Repository\CertificationRepository;
use App\Services\Repository\CurriculumVitaeRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProfileService::class, ProfileRepository::class);
        $this->app->bind(AboutService::class, AboutRepository::class);
        $this->app->bind(ExperienceService::class, ExperienceRepository::class);
        $this->app->bind(EducationService::class, EducationRepository::class);
        $this->app->bind(CertificationService::class, CertificationRepository::class);
        $this->app->bind(ProjectService::class, ProjectRepository::class);
        $this->app->bind(SkillService::class, SkillRepository::class);
        $this->app->bind(CourseService::class, CourseRepository::class);
        $this->app->bind(OrganizationService::class, OrganizationRepository::class);
        $this->app->bind(CurriculumVitaeService::class, CurriculumVitaeRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //file css, js hanya akan diload jika url ngrok-free.app, dan url asset menjadi https (default ngrok adalah http untuk file css, js)
        if (str_contains(request()->url(), 'ngrok-free.app')) {
            URL::forceScheme('https');
        }

        Certification::observe(CertificationObserver::class);
        CurriculumVitae::observe(CurriculumVitaeObserver::class);
        Education::observe(EducationObserver::class);
        Experience::observe(ExperienceObserver::class);
        Place::observe(PlaceObserver::class);
        Pronoun::observe(PronounObserver::class);
        Profile::observe(ProfileObserver::class);
        Project::observe(ProjectObserver::class);
        JobType::observe(JobTypeObserver::class);
    }
}
