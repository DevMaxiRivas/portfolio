<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ProjectCardListComponent extends Component
{
    public string $id;
    public string $url_resource;
    public array $list = [];
    public int $size_list = 0;
    public $currentPage = 1;
    public $lastPage = 1;

    public function mount(string $id, string $url_resource)
    {
        $this->id = $id;
        $this->url_resource = $url_resource;
        $this->fetchData();
    }
    public function render()
    {
        return view('livewire.project-card-list-component');
    }

    public function fetchData()
    {
        try {
            $response = Http::get($this->url_resource . '?page=' . $this->currentPage);

            if ($response->successful()) {
                $data = $response->json();
                $this->list = $data['data'];
                $this->size_list = count($this->list);
                $this->currentPage = $data['meta']['current_page'];
                $this->lastPage = $data['meta']['last_page'];
            } else {
                Log::info('Failed to fetch projects: ' . $response->status());
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
        }
    }

    public function nextPage()
    {
        if ($this->currentPage < $this->lastPage) {
            $this->currentPage++;
            $this->fetchData();
        }
    }

    public function previousPage()
    {
        if ($this->currentPage > 1) {
            $this->currentPage--;
            $this->fetchData();
        }
    }
}
