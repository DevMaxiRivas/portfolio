<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public array $items = [];

    public function mount()
    {
        $this->items = [
            [
                "name" => __("navbar.home"),
                "id" => "home"
            ],
            [
                "name" => __("navbar.profiles"),
                "id" => "profiles"
            ],
            [
                "name" => __("navbar.experiences"),
                "id" => "experiences"
            ],
            [
                "name" => __("navbar.projects"),
                "id" => "projects"
            ],
            [
                "name" => __("navbar.studies"),
                "id" => "studies"
            ],
            [
                "name" => __("navbar.contact"),
                "id" => "contact"
            ]
        ];
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
