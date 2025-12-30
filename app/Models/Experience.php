<?php

namespace App\Models;

use Closure;
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
}
