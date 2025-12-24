<?php

namespace App\Livewire;

use Livewire\Component;

class CardComponent extends Component
{
    public string $title;
    public ?string $subtitle;
    public array $images_urls;
    public string $description;
    public ?string $link;
    public ?string $btn_label;
    const MAX_DESCRIPTION_LENGTH = 100;

    public function mount(string $title, ?string $subtitle, string $description, array $images_urls, ?string $link, ?string $btn_label)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->images_urls = $images_urls;
        $this->description = $description;
        $this->link = $link;
        $this->btn_label = $btn_label;
    }

    public function render()
    {
        return view('livewire.card-component');
    }
}
