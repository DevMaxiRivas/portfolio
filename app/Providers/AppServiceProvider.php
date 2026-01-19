<?php

namespace App\Providers;

use App\Interfaces\ExperienceRepositoryInterface;
use App\Interfaces\StudyRepositoryInterface;
use App\Interfaces\ProjectRepositoryInterface;
use App\Repositories\ExperienceRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\StudyRepository;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
        // Forzar la URL raíz para generación de URLs
        URL::forceRootUrl(config('app.url'));


        $this->app->bind(ProjectRepositoryInterface::class, ProjectRepository::class);
        $this->app->bind(StudyRepositoryInterface::class, StudyRepository::class);
        $this->app->bind(ExperienceRepositoryInterface::class, ExperienceRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
