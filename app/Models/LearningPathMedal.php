<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningPathMedal extends Model
{
    use HasFactory;

    protected $fillable = [
        'medal_name',
        'description',
    ];
}
