<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class ActivitiesRegistrations extends Model
{
    use HasFactory;

    public function activities(): HasMany
    {
        return $this->hasMany(
            Activities::class,
            'id',
            'activities_id'
        );
    }

    public function users(): HasMany
    {
        return $this->hasMany(
            User::class,
            'id',
            'user_id'
        );
    }
}
