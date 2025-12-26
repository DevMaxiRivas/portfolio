<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceTranslation extends Model
{
    protected $fillable = [
        'company_name',
        'position',
        'description',
        'experience_id',
        'language_id',
    ];

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
