<?php

namespace App\Http\Controllers;

use App\Filters\ProjectFilter;
use App\Http\Resources\ProjectCollection;
use App\Models\Project;
use App\Services\ProjectService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    protected final ProjectService $service;

    public function __construct(ProjectService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return $this->service->getProjectsTranslated();
    }

    public function test(ProjectFilter $filter, Request $request)
    {
        Log::info($request->all());
        return new ProjectCollection(Project::filter($filter)->get());
    }
}
