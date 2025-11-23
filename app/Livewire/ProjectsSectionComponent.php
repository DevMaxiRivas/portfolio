<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectsSectionComponent extends Component
{
    public function render()
    {
        return view(
            'livewire.projects-section-component',
            [
                'projects' => \App\Models\Project::orderBy('created_at', 'DESC')->get(),
            ]
        );
    }
}