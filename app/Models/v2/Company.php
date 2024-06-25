<?php

namespace App\Models\v2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\v2\Tenant;
use App\Models\v2\User;


class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name'
    ];

    public function tenants()
    {
        return $this->hasMany(Tenant::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
