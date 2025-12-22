<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
