<?php

namespace App\DTOs;

class ProjectShowCardDTO
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        private int $id,
        public string $title,
        public string $description,
        public array $images_urls,
        public string $link,
        public array $tags
    ) {}


    public static function fromArray(array $data): self
    {
        return new self(
            id: $data["id"],
            title: $data['translations'][0]['title'] ?? $data['title'],
            description: $data['translations'][0]['description'] ?? "",
            images_urls: $data['images_urls'] ?? [],
            link: $data['github_link'] ?? '',
            tags: array_map(function ($tech) {
                return $tech['name'];
            }, $data['technologies'] ?? [])
        );
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            "title" => $this->title,
            "subtitle" => "",
            "description" => $this->description,
            "images_urls" => $this->images_urls,
            "link" => $this->link,
            "tags" => $this->tags
        ];
    }
}
