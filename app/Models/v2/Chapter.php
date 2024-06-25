<?php

namespace App\Models\v2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\v2\User;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'title', 'description', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
