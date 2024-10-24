<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'lastname',
        'firstname',
        'date_birth',
        'email',
        'tel',
        'gender',

        'role_id',
        'status_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    public function horses(): HasMany
    {
        return $this->hasMany(Horse::class);
    }



    public function activities(): BelongsToMany
    {
        return $this->belongsToMany(
            Activities::class,
            ActivitiesRegistrations::class,
        );
    }

    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activities::class);
    }


    //

    public function works(): BelongsToMany
    {
        return $this->belongsToMany(
            Work::class,
            WorkRegistrations::class,
        );
    }

    public function medicals(): BelongsToMany
    {
        return $this->belongsToMany(
            Medical::class,
            MedicalRegistrations::class,
        );
    }


    public function availabilities(): HasMany
    {
        return $this->hasMany(Availability::class);
    }

    public function announcements(): HasMany
    {
        return $this->hasMany(Announcement::class);
    }



    //

    public function getFullName()
    {
        return $this->lastname.' '.$this->firstname;
    }


}
