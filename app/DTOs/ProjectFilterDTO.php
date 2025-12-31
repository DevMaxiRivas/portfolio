<?php

namespace App\DTOs;

use Illuminate\Http\Request;

class ProjectFilterDTO
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public ?int $id,
        public ?array $technologiesIds,
        public ?string $languageAcronym
    ) {}

    public static function fromRequest(Request $data): self
    {
        return new self(
            id: $data->id ?? null,
            technologiesIds: $data->technologiesIds ?? [],
            languageAcronym: $data->languageAcronym ?? null,
        );
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'technologiesIds' => $this->technologiesIds,
            'languageAcronym' => $this->languageAcronym,
        ];
    }
}
