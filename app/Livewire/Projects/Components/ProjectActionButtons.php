<?php

namespace App\Livewire\Projects\Components;

use Livewire\Component;

class ProjectActionButtons extends Component
{
    public ?string $github_link = null;
    public ?string $access_link = null;
    public ?string $section_lear_more_id;
    public function render()
    {
        return view('livewire.projects.components.project-action-buttons');
    }
}
