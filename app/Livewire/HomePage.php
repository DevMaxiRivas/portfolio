<?php

namespace App\Livewire;

use App\Models\Experience;
use App\Services\ExperienceService;
use App\Services\ProjectService;
use App\Services\StudyService;
use Livewire\Component;

class HomePage extends Component
{
    protected final ProjectService $projectService;
    protected final StudyService $studyService;
    protected final ExperienceService $experienceService;

    public function mount(ProjectService $projectService, StudyService $studyService, ExperienceService $experienceService)
    {
        $this->projectService = $projectService;
        $this->studyService = $studyService;
        $this->experienceService = $experienceService;
    }

    public function render()
    {
        return view('livewire.home-page', [
            'projects_section' => [
                'id' => 'projects',
                'title' => __('homepage.projects-section.title'),
                'subtitle' => __('homepage.projects-section.subtitle'),
                'projects' => $this->projectService->getAllProjects(),
                'btn_label' => __('homepage.projects-section.btn-see_project'),
            ],
            'studies_section' => [
                'id' => 'studies',
                'title' => __('homepage.studies-section.title'),
                'subtitle' => __('homepage.studies-section.subtitle'),
                'projects' => $this->studyService->getAllStudies(),
                'btn_label' => '',
            ],
            'experiences_section' => [
                'id' => 'experiences',
                'title' => __('homepage.experiences-section.title'),
                'subtitle' => __('homepage.experiences-section.subtitle'),
                'projects' => $this->experienceService->getAllExperiences(),
                'btn_label' => '',
            ]
        ]);
    }
}
