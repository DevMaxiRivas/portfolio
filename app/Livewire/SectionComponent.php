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
    public string $btn_see_tags;
    public function mount(string $title = "Title", string $subtitle = "Subtitle", array $element_list = [], string $btn_label = "Label Button", string $btn_see_tags = "See tags")
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->element_list = $element_list;
        $this->btn_label = $btn_label;
        $this->btn_see_tags = $btn_see_tags;
    }
    public function render()
    {
        return view('livewire.section-component');
    }
}
