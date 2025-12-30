<?php

namespace App\Http\Controllers;

use App\Services\StudyService;
use Illuminate\Http\Request;

class StudyController extends Controller
{
    protected final StudyService $service;

    public function __construct(StudyService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        return $this->service->getStudies();
    }
}
