<?php

namespace App\Livewire;

use Livewire\Component;

class ListCardsComponent extends Component
{
    public array $element_list = [];

    public function mount(array $element_list)
    {
        $this->element_list = $element_list;
    }

    public function render()
    {
        return view('livewire.list-cards-component');
    }
}
