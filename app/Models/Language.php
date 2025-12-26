<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'name',
        'proficiency_level',
        'acronym',
    ];

    public function projects()
    {
        return $this->hasManyThrough(Project::class, ProjectTranslation::class);
    }

    public function project_translations()
    {
        return $this->hasMany(ProjectTranslation::class);
    }

    public function studies()
    {
        return $this->hasManyThrough(Study::class, StudyTranslation::class);
    }
}
