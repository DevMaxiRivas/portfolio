<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
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
}