<?php

namespace App\DTOs;

use Carbon\Carbon;

class StudyShowDTO
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public string $title,
        public string $subtitle,
        public string $description,
        public array $images_urls,
        public ?string $link,
    ) {}

    private static function formatSubtitle(string $institutionName, Carbon $start_date, ?Carbon $end_date): string
    {
        $startDate = $start_date->format('Y');
        $endDate = $end_date ? $end_date->format('Y') : 'Present';
        return $institutionName . ' (' . $startDate . ' - ' . $endDate . ')';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            title: $data['degree'],
            subtitle: self::formatSubtitle(
                institutionName: empty($data['translations']) ? $data['institution_name'] : $data['translations'][0]['institution_name'],
                start_date: Carbon::parse($data['start_date']),
                end_date: $data['end_date'] ? Carbon::parse($data['end_date']) : null
            ),
            description: empty($data['translations']) ? $data['description'] : $data['translations'][0]['description'],
            images_urls: [],
            link: ''
        );
    }

    public function toArray(): array
    {
        return [
            "title" => $this->title,
            "subtitle" => $this->subtitle,
            "description" => $this->description,
            "images_urls" => $this->images_urls,
            "link" => $this->link,

        ];
    }
}
