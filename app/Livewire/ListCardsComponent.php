<?php

namespace App\Livewire;

use Livewire\Component;

class ListCardsComponent extends Component
{
    public array $element_list;
    public string $btn_label;
    public string $btn_see_tags;
    public int $size_list;

    public function mount(array $element_list = [], string $btn_label = "", string $btn_see_tags = "")
    {
        $this->element_list = $element_list;
        $this->btn_label = $btn_label;
        $this->btn_see_tags = $btn_see_tags;
        $this->size_list = count($element_list);
    }

    public function render()
    {
        return view('livewire.list-cards-component');
    }
}
