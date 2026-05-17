<?php

namespace App\Http\Resources;

use App\Models\ProjectTechnology;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'images_urls' => $this->images_urls,
            'slug' => $this->slug,
            'translations' => ProjectTranslationResource::collection($this->whenLoaded('translations')),
            'technologies' => ProjectTechnologyResource::collection($this->whenLoaded('technologies')),
            'github_link' => $this->github_link,
            'access_link' => $this->access_link
        ];
    }
}
