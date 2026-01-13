<?php

namespace App\Livewire;

use App\DTOs\ExperienceShowCardDTO;
use App\DTOs\ProjectShowCardDTO;
use App\DTOs\StudyShowCardDTO;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page', [
            'projects_section' => [
                'id' => 'projects',
                'title' => __('homepage.projects-section.title'),
                'subtitle' => __('homepage.projects-section.subtitle'),
                'data_list' => [
                    'id' => 'project_card_list',
                    'url_resource' => config('services.portfolio_api.request_host') . "/api/projects",
                    'dto' => ProjectShowCardDTO::class,
                    'btn_label' => __('homepage.projects-section.btn-see_project'),
                    'btn_see_tags_label' => __('homepage.projects-section.btn-see_technologies')
                ]
            ],
            'studies_section' => [
                'id' => 'studies',
                'title' => __('homepage.studies-section.title'),
                'subtitle' => __('homepage.studies-section.subtitle'),
                'data_list' => [
                    'id' => 'studies_card_list',
                    'url_resource' => config('services.portfolio_api.request_host') . "/api/studies",
                    'dto' => StudyShowCardDTO::class,
                    'btn_label' => __('homepage.projects-section.btn-see_project'),
                    'btn_see_tags_label' => __('homepage.projects-section.btn-see_technologies')
                ]
            ],
            'experiences_section' => [
                'id' => 'experiences',
                'title' => __('homepage.experiences-section.title'),
                'subtitle' => __('homepage.experiences-section.subtitle'),
                'data_list' => [
                    'id' => 'experiences_card_list',
                    'url_resource' => config('services.portfolio_api.request_host') . "/api/experiences",
                    'dto' => ExperienceShowCardDTO::class,
                    'btn_label' => __('homepage.experiences-section.btn-see_project'),
                    'btn_see_tags_label' => __('homepage.experiences-section.btn-see_technologies')
                ]
            ],
        ]);
    }
}
