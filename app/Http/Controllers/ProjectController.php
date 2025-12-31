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
        return $this->service->getProjects(
            filter: ProjectFilterDTO::fromRequest($request),
            paginate: $request->perPage
        );
    }
}
