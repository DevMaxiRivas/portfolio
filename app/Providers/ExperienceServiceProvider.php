<?php

namespace App\Providers;

use App\Interfaces\StudyRepositoryInterface;
use App\Repositories\StudyRepository;
use Illuminate\Support\ServiceProvider;

class ExperienceServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(StudyRepositoryInterface::class, StudyRepository::class);
    }
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}