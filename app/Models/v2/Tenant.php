<?php

namespace App\Models\v2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\v2\User;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'company_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
