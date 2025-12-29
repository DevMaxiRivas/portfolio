<?php

namespace App\Livewire;

use Livewire\Component;

class CardWithCarouselComponent extends Component
{
    public string $title;
    public string $subtitle;
    public array $images_urls;
    public array $tags;
    public string $description;
    public string $link;
    public string $btn_label;
    public bool $full_width;
    public string $btn_see_tags;

    public function mount(array $data, bool $full_widh = false)
    {
        $this->title = $data["title"];
        $this->subtitle = $data["subtitle"] ?? '';
        $this->images_urls = $data["images_urls"] ?? [];
        $this->tags = $data["tags"] ?? [];
        $this->description = $data["description"];
        $this->link = $data["link"] ?? '';
        $this->btn_label = $data["btn_label"] ?? '';
        $this->full_width = $full_widh;
        $this->btn_see_tags = $data["btn_see_tags"] ?? '';
    }

    public function render()
    {
        return view('livewire.card-with-carousel-component');
    }
}
