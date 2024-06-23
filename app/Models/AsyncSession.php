<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsyncSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_name',
        'session_date',
    ];
}
