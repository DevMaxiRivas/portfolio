<?php

namespace App\Livewire;

use App\Services\ProjectService;
use App\Services\StudyService;
use Livewire\Component;

class HomePage extends Component
{
    protected ProjectService $projectService;
    protected StudyService $studyService;

    public function mount(ProjectService $projectService, StudyService $studyService)
    {
        $this->projectService = $projectService;
        $this->studyService = $studyService;
    }

    public function render()
    {
        return view('livewire.home-page', [
            'projects_section' => [
                'id' => 'work',
                'title' => __('homepage.projects-section.title'),
                'subtitle' => __('homepage.projects-section.subtitle'),
                'projects' => $this->projectService->getAllProjects(),
                'btn_label' => __('homepage.projects-section.btn-see_project'),
            ],
            'studies_section' => [
                'id' => 'work',
                'title' => __('homepage.studies-section.title'),
                'subtitle' => __('homepage.studies-section.subtitle'),
                'projects' => $this->studyService->getAllStudies(),
                'btn_label' => '',
            ]
        ]);
    }
}
