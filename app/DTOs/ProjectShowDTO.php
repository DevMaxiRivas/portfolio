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
    ) {}

    public static function fromModel(Project $project): self
    {
        return new self(
            title: $project->translated_title,
            description: $project->translated_description,
            images_urls: $project->images_urls ?? [],
            link: $project->github_link ?? null,
        );
    }

    public static function fromArray(array $data): self
    {
        return new self(
            title: $data['translated_title'],
            description: $data['translated_description'],
            images_urls: $data['images_urls'] ?? [],
            link: $data['github_link'] ?? null,
        );
    }

    public function toArray(): array
    {
        return [
            "title" => $this->title,
            "subtitle" => "",
            "description" => $this->description,
            "images_urls" => $this->images_urls,
            "link" => $this->link,
        ];
    }
}
