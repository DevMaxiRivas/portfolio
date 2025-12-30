<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyTranslation extends Model
{
    protected $fillable = [
        'institution_name',
        'degree',
        'field_of_study',
        'description',
        'location',
        'study_id',
        'language_id',
    ];

    public function study()
    {
        return $this->belongsTo(Study::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
