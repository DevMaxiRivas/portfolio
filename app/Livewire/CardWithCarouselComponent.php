<?php

namespace App\Livewire;

use Livewire\Component;

class CardWithCarouselComponent extends Component
{
    public array $data;
    public bool $full_width;

    public function mount(array $data = [], bool $full_widh = false)
    {
        $this->full_width = $full_widh;
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.card-with-carousel-component');
    }
}
