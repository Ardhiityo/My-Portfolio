<?php

namespace App\Providers;

use App\Services\Interface\AboutService;
use App\Services\Interface\EducationService;
use App\Services\Interface\ExperienceService;
use App\Services\Interface\ProfileService;
use App\Services\Repository\AboutRepository;
use App\Services\Repository\EducationRepository;
use App\Services\Repository\ExperienceRepository;
use App\Services\Repository\ProfileRepository;
use Illuminate\Support\ServiceProvider;

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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
