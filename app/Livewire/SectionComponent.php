<?php

namespace App\Livewire;

use Livewire\Component;

class SectionComponent extends Component
{
    public string $title;
    public ?string $subtittle;

    public array $element_list;

    public function mount(string $title, string $subtittle = "Subtitulo", array $element_list = [])
    {
        $this->title = $title;
        $this->subtittle = $subtittle;
        $this->element_list = $element_list;
    }
    public function render()
    {
        return view('livewire.section-component');
    }
}
