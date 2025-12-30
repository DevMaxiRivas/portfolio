<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "institution_name" => $this->institution_name,
            "degree" => $this->degree,
            "field_of_study" => $this->field_of_study,
            "description" => $this->description,
            "location" => $this->location,
            "start_date" => $this->start_date,
            "end_date" => $this->end_date,
            "certificate_link" => $this->certificate_link,
        ];
    }
}
