<?php

namespace App\Livewire\Projects;

use App\DTOs\ProjectFilterDTO;
use App\Models\Project;
use App\Services\ProjectService;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Page extends Component
{
    public string $slug;
    protected ?array $project = null;

    public function mount(string $slug, ProjectService $projectService)
    {
        $project = $projectService->getProjects(
            filter: ProjectFilterDTO::fromArray([
                'slug' => $slug,
                'languageAcronym' => app()->getLocale()
            ]),
            paginate: 1
        );

        $result = json_decode($project->toJson(), true);

        if (!isset($result["data"]) || count($result["data"]) == 0) {
            abort(404);
        }

        $this->project = $result["data"][0];
    }
    public function render()
    {
        $translation = $this->project['translations'][0] ?? null;
        return view('livewire.projects.page', [
            'project' => $this->project,
            'translation' => $translation,
            'height_image' => "500px"
        ]);
    }
}
