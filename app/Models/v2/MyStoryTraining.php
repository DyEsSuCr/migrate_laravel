<?php

namespace App\Models\v2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\v2\User;

class MyStoryTraining extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'user_id', 'training_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
