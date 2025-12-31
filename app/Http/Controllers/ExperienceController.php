<?php

namespace App\Http\Controllers;

use App\DTOs\ExperienceFilterDTO;
use App\Http\Requests\ExperienceFilterRequest;
use App\Services\ExperienceService;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    protected final ExperienceService $service;

    public function __construct(ExperienceService $service)
    {
        $this->service = $service;
    }

    public function index(ExperienceFilterRequest $request)
    {
        return $this->service->getExperiences(
            filter: ExperienceFilterDTO::fromRequest($request),
            paginate: $request->perPage
        );
    }
}
