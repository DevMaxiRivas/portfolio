<?php

namespace App\DTOs;

use Carbon\Carbon;

class ExperienceShowDTO
{
    /**
     * Create a new class instance.
     */
    const MONTHS = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
    ];
    public function __construct(
        public string $title,
        public string $subtitle,
        public string $description,
        public array $images_urls,
        public ?string $link,
    ) {}

    private static function formatSubtitle(string $company_name, Carbon $start_date, ?Carbon $end_date): string
    {
        $startDate = __('months.' . self::MONTHS[$start_date->month - 1]) . ' ' . $start_date->format('Y');
        $endDate = $end_date ? __('months.' . self::MONTHS[$end_date->month - 1]) . ' ' . $end_date->format('Y') : 'Present';
        return $company_name . ' (' . $startDate . ' - ' . $endDate . ')';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            title: $data['position'],
            subtitle: self::formatSubtitle(
                company_name: $data['company_name'],
                start_date: Carbon::parse($data['start_date']),
                end_date: $data['end_date'] ? Carbon::parse($data['end_date']) : null
            ),
            description: $data['description'],
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
