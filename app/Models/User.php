<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_photo_path'
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

    public function avatarUrl()
    {
        // if ($this->profile_photo_path) {
        //     return Storage::disk('local')->url($this->profile_photo_path);
        // }

        return "https://ui-avatars.com/api/?name=" . urlencode($this->name);
    }

    public function clients(){
        return $this->hasMany(Client::class);
    }
    public function client(){
        return $this->hasOne(Client::class)->latestOfMany();
    }

    public function generateUniqueNumber($timestamp = null)
    {
        $timestamp = $timestamp ?? now()->timestamp;
        return $timestamp . mt_rand(1000, 9999);
    }
}
