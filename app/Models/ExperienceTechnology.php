<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceTechnology extends Model
{
    protected $table = 'experience_technology';
    protected $fillable = [
        'experience_id',
        'technology_id',
    ];
}
