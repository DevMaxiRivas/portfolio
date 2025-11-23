<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectCardComponent extends Component
{
    public Project $project;
    public function render()
    {
        return view('livewire.project-card-component');
    }
}