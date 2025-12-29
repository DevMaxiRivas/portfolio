<?php

namespace App\Livewire;

use Livewire\Component;

class CarouselComponent extends Component
{
    public array $images_urls;
    public string $id;

    public function mount(array $images_urls, ?string $id)
    {
        $this->images_urls = $images_urls;
        $this->id = $id ?? str(rand(1, 1000));
    }
    public function render()
    {
        return view('livewire.carousel-component');
    }
}
