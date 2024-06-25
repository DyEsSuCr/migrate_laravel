<?php

namespace App\Models\v2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\v2\User;

class LearningPathUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'user_id', 'path_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
