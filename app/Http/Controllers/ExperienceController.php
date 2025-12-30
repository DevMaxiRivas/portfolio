<?php

namespace App\Http\Controllers;

use App\Services\ExperienceService;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    protected final ExperienceService $service;

    public function __construct(ExperienceService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        return $this->service->getExperiences();
    }
    //
}
