<?php

namespace App\DTOs;

use Carbon\Carbon;

class ExperienceShowCardDTO
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public int $id,
        public string $title,
        public string $subtitle,
        public string $description,
        public array $tags,
    ) {}

    private static function formatSubtitle(string $company_name, Carbon $start_date, ?Carbon $end_date): string
    {
        $startDate = __('months.' . $start_date->format('F')) . ' ' . $start_date->format('Y');
        $endDate = $end_date ? __('months.' . $end_date->format('F')) . ' ' . $end_date->format('Y') : 'Present';
        return $company_name . ' (' . $startDate . ' - ' . $endDate . ')';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            id: $data['id'],
            title: $data['translations'][0]['position'] ?? $data['position'],
            subtitle: self::formatSubtitle(
                company_name: $data['translations'][0]['company_name'] ?? $data['company_name'],
                start_date: Carbon::parse($data['start_date']),
                end_date: $data['end_date'] ? Carbon::parse($data['end_date']) : null
            ),
            description: $data['translations'][0]['description'] ?? '',
            tags: array_map(function ($tech) {
                return $tech['name'];
            }, $data['technologies'] ?? [])
        );
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "subtitle" => $this->subtitle,
            "description" => $this->description,
            "tags" => $this->tags,
        ];
    }
}
