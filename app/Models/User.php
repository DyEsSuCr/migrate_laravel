<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\LearningPathUser;
use App\Models\RentedProduction;
use App\Models\MyStoryTraining;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
        'permissions',
        'trial_ends_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function myStoryTrainings()
    {
        return $this->hasMany(MyStoryTraining::class);
    }

    public function learningPathUsers()
    {
        return $this->hasMany(LearningPathUser::class);
    }

    public function rentedProductions()
    {
        return $this->hasMany(RentedProduction::class);
    }
}
