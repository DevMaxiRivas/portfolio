<?php

namespace App\Models;

use App\Enums\ProficiencyLevelTechnologyEnum;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $fillable = [
        "name",
        "proficiency_level",
    ];

    protected $casts = [
        "proficiency_level" => ProficiencyLevelTechnologyEnum::class,
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
