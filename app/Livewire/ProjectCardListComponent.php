<?php

namespace App\Livewire;

use App\Models\Language;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ProjectCardListComponent extends Component
{
    public string $id;
    public string $url_resource;
    public string $dto;
    public string $btn_label;
    public string $btn_see_tags_label;
    public array $list = [];
    public int $size_list = 0;
    public $currentPage = 1;
    public $lastPage = 1;

    public function mount(array $data)
    {
        $this->id = $data['id'];
        $this->url_resource = $data['url_resource'];
        $this->dto = $data['dto'];
        $this->btn_label = $data['btn_label'];
        $this->btn_see_tags_label = $data['btn_see_tags_label'];
        $this->fetchData();
    }
    public function render()
    {
        return view('livewire.project-card-list-component');
    }

    public function fetchData()
    {
        try {
            $url = $this->url_resource . '?page=' . $this->currentPage . '&language=' . Language::where('acronym', app()->getLocale())->first()->id;
            $response = Http::get($url);
            if ($response->successful()) {
                $data = $response->json();

                $this->list = self::adjustData($data['data']);
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

    protected function adjustData(array $data): array
    {
        return array_map(function ($item) {
            return $this->dto::fromArray($item)->toArray();
        }, $data);
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
