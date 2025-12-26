<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'language_id',
        'github_link',
        'access_link',
        'image_paths',
        'image_names',
    ];

    protected $casts = [
        'image_paths' => 'array',
        'image_names' => 'array',
    ];

    public function technologies()
    {
        return $this->belongsToMany(Technology::class, 'project_technologies');
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function translations()
    {
        return $this->hasMany(ProjectTranslation::class);
    }

    public function getAnyPicturesAttribute(): int
    {
        return !empty($this->image_paths);
    }

    public function getImagesUrlsAttribute(): ?array
    {
        return !empty($this->image_paths) ? array_map(function ($path) {
            return Storage::disk('local')->temporaryUrl($path, now()->addMinutes(5));
        }, $this->image_paths) : null;
    }
}
