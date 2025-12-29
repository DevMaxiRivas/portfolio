<?php

namespace App\Models;

use App\Enums\ProficiencyLevelTechnologyEnum;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $fillable = [
        "id",
        "name",
        "category_id",
        "proficiency_level",
    ];

    protected $casts = [
        "proficiency_level" => ProficiencyLevelTechnologyEnum::class,
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
