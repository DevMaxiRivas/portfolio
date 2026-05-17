<?php

namespace App\Livewire;

use Livewire\Component;

class CardWithCarouselComponent extends Component
{
    public array $data;
    public bool $full_width;
    public string $btn_see_tags_label;
    public string $btn_label;

    public function mount(array $data = [], bool $full_width, string $btn_see_tags_label = 'See Tags', string $btn_label = 'See More')
    {
        $this->full_width = $full_width;
        $this->data = $data;
        $this->btn_see_tags_label = $btn_see_tags_label;
        $this->btn_label = $btn_label;
    }

    public function render()
    {
        return view('livewire.card-with-carousel-component');
    }
}
