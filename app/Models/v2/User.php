<?php

namespace App\Models\v2;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\v2\LearningPathUser;
use App\Models\v2\RentedProduction;
use App\Models\v2\MyStoryTraining;
use App\Models\v2\LearningPathMedal;
use App\Models\v2\AsyncSession;
use App\Models\v2\Tenant;
use App\Models\v2\Role;
use App\Models\v2\Chapter;
use App\Models\v2\Production;
use App\Models\v2\Company;


class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'last_name', 'email', 'permissions', 'trial_ends_at', 'company_id', 'tenant_id', 'role_id', 'other_attributes'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    public function productions()
    {
        return $this->hasMany(Production::class);
    }

    public function myStoryTrainings()
    {
        return $this->hasMany(MyStoryTraining::class);
    }

    public function learningPathMedals()
    {
        return $this->hasMany(LearningPathMedal::class);
    }

    public function learningPathUsers()
    {
        return $this->hasMany(LearningPathUser::class);
    }

    public function rentedProductions()
    {
        return $this->hasMany(RentedProduction::class);
    }

    public function asyncSessions()
    {
        return $this->hasMany(AsyncSession::class);
    }
}
