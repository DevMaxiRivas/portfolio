<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'company_name',
        'position',
        'is_visible',
        'start_date',
        'end_date',
        'created_at',
        'updated_at'
    ];

    public function translations()
    {
        return $this->hasMany(ExperienceTranslation::class);
    }

    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }

    public function scopeFilter(Builder $builder, QueryFilter $filters)
    {
        return $filters->apply($builder);
    }

    public function getTechnologiesTagsAttribute(): array
    {
        return !empty($this->technologies) ? $this->technologies->pluck('name')->toArray() : [];
    }
}
