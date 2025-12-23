<?php

namespace App\DTOs;

use App\Models\Project;

class ProjectShowDTO
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public string $title,
        public string $description,
        public array $images_urls,
        public ?string $link,
        public ?string $btn_label,
    ) {}

    public static function fromModel(Project $project): self
    {
        return new self(
            title: $project->translated_title,
            description: $project->translated_description,
            images_urls: $project->images_urls ?? [],
            link: $project->github_link ?? null,
            btn_label: __("homepage.projects-section.btn-see_project"),
        );
    }

    public function toArray(): array
    {
        return [
            "title" => $this->title,
            "subtittle" => "",
            "description" => $this->description,
            "images_urls" => $this->images_urls,
            "link" => $this->link,
            "btn_label" => $this->btn_label,
        ];
    }
}
