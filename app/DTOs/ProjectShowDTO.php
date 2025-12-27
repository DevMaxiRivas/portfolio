<?php

namespace App\DTOs;

class ProjectShowDTO
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public string $title,
        public string $description,
        public array $images_urls,
        public string $link,
        public array $tags
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            title: $data['translated_title'],
            description: $data['translated_description'],
            images_urls: $data['images_urls'] ?? [],
            link: $data['github_link'] ?? '',
            tags: $data['technologies'] ?? []
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
            "tags" => $this->tags
        ];
    }
}
