<?php

namespace App\Http\Controllers;

use App\Services\StudyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StudyController extends Controller
{
    protected StudyService $service;

    public function __construct(StudyService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        return $this->service->getStudies();
    }
}
