<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryTechnology extends Model
{
    protected $table = "category_technology";
    protected $fillable = [
        "id",
        "category_id",
        "technology_id"
    ];
}
