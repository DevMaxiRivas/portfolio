<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
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

    //IT WILL BE RESPONSABLE TO QUERY THOSE FILTERS
    public function scopeFilter(Builder $builder, QueryFilter $filters)
    {
        return $filters->apply($builder);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function translations()
    {
        return $this->hasMany(ProjectTranslation::class);
    }

    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }

    public function getAnyPicturesAttribute(): int
    {
        return !empty($this->image_paths);
    }

    public function getImagesUrlsAttribute(): ?array
    {
        return !empty($this->image_paths) ? array_map(function ($path) {
            $encodedPath = str_replace('\\', '/', $path);
            $encodedPath = str_replace('//', '/', $encodedPath);

            return Storage::disk('local')->temporaryUrl($encodedPath, now()->addMinutes(1));
        }, $this->image_paths) : null;
    }


    public function getTechnologiesTagsAttribute(): array
    {
        return !empty($this->technologies) ? $this->technologies->pluck('name')->toArray() : [];
    }
}
