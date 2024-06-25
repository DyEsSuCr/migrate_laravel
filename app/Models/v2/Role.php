<?php

namespace App\Models\v2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\v2\User;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
