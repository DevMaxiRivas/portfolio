<?php

namespace App\Livewire;

use Livewire\Component;

class ListCardsComponent extends Component
{
    public array $element_list;
    public string $btn_label;

    public function mount(array $element_list = [], string $btn_label = "")
    {
        $this->element_list = $element_list;
        $this->btn_label = $btn_label;
    }

    public function render()
    {
        return view('livewire.list-cards-component');
    }
}
