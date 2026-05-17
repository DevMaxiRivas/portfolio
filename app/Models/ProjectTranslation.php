<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTranslation extends Model
{
    protected $fillable = [
        "title",
        "description",
        "details",
        "project_id",
        "language_id",
        "created_at",
        "updated_at"
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
