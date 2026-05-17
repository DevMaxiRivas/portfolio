<?php

namespace App\Http\Controllers;

use App\DTOs\ProjectFilterDTO;
use App\Http\Requests\ProjectFilterRequest;
use App\Services\ProjectService;

class ProjectController extends Controller
{
    protected ProjectService $service;

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