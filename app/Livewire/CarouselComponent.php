<?php

namespace App\Livewire;

use Livewire\Component;

class CarouselComponent extends Component
{
    public array $images_urls;
    public string $id;
    public string $height_image;

    public function mount(array $images_urls, ?string $id, ?string $height_image = null)
    {
        $this->images_urls = $images_urls;
        $this->id = $id ?? str(rand(1, 1000));
        $this->height_image = $height_image ?? '300px';
    }
    public function render()
    {
        return view('livewire.carousel-component');
    }
}
