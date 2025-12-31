<?php

namespace App\Http\Controllers;

use App\DTOs\ProjectFilterDTO;
use App\Filters\ProjectFilter;
use App\Http\Requests\ProjectFilterRequest;
use App\Http\Resources\ProjectCollection;
use App\Models\Project;
use App\Services\ProjectService;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    protected final ProjectService $service;

    public function __construct(ProjectService $service)
    {
        $this->service = $service;
    }

    public function index(ProjectFilterRequest $request)
    {
        // return $this->service->getProjectsTranslated();
        return new ProjectCollection(
            Project::filter(
                new ProjectFilter($request)
            )
                ->with("technologies")
                ->get()
        );
    }

    public function test(ProjectFilterRequest $request)
    {
        $this->service->getProjects(ProjectFilterDTO::fromRequest($request));
        return new ProjectCollection(
            Project::filter(
                new ProjectFilter($request)
            )->get()
        );
    }
}
