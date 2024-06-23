<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class MyStoryTraining extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'training_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
