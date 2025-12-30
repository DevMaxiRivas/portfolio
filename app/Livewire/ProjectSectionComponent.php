<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectSectionComponent extends Component
{
    public string $id;
    public string $title;
    public ?string $subtitle;
    public array $data_list;
    public function mount(array $data)
    {
        $this->id = $data['id'];
        $this->title = $data['title'];
        $this->subtitle = $data['subtitle'];
        $this->data_list = $data['data_list'];
    }
    public function render()
    {
        return view('livewire.project-section-component');
    }
}
