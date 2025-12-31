<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource2 extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // dd($this);
        return [
            'id' => $this->id,
            'translated_title' => $this->translated_title,
            'translated_description' => $this->translated_description,
            'images_urls' => $this->images_urls,
            'technologies' => $this->technologies_tags,
            'github_link' => $this->github_link,
        ];
    }
}
