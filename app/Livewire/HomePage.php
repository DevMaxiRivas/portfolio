<?php

namespace App\Livewire;

use App\Services\ProjectService;
use Livewire\Component;

class HomePage extends Component
{
    protected ProjectService $projectService;

    public function mount(ProjectService $projectService)
    {
        $this->projectService = $projectService;
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
                'projects' => $this->projectService->getAllProjects(),
                'btn_label' => __('homepage.studies-section.btn-see_project'),
            ]
        ]);
    }
}
