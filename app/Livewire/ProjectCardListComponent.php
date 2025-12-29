<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ProjectCardListComponent extends Component
{
    public array $list = [];
    public int $size_list = 0;
    public $currentPage = 1;
    public $lastPage = 1;
    public bool $isLoading = true;

    public function mount()
    {
        $this->fetchData();
    }
    public function render()
    {
        return view('livewire.project-card-list-component');
    }

    public function fetchData()
    {
        try {
            Log::info('Fetching projects for page: ' . $this->currentPage);
            $response = Http::get(route('api.projects') . '?page=' . $this->currentPage);

            if ($response->successful()) {
                // dd($response->json());
                Log::info($response->json());
                $data = $response->json();
                $this->list = $data['data'];
                $this->size_list = count($this->list);
                $this->currentPage = $data['meta']['current_page'];
                $this->lastPage = $data['meta']['last_page'];
                $this->isLoading = false;
            } else {
                Log::info('Failed to fetch projects: ' . $response->status());
            }
            $this->isLoading = false;
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
