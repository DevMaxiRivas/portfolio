<?php

namespace App\Livewire;

use Livewire\Component;

class SectionComponent extends Component
{
    public string $id;
    public string $title;
    public ?string $subtitle;
    public array $element_list;
    public string $btn_label;
    public function mount(string $title = "Title", string $subtitle = "Subtitle", array $element_list = [], string $btn_label = "Label Button")
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->element_list = $element_list;
        $this->btn_label = $btn_label;
    }
    public function render()
    {
        return view('livewire.section-component');
    }
}
