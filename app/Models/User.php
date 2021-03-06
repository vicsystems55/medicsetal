<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'username',
        'otp',
        'email',
        'usercode',
        'referrer_code',
        'password',
        'real_password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function subscription()
    {
        
        
        return $this->hasOne('App\Models\Subscription', 'user_id');
    }

    public function leads()
    {
        
        
        return $this->hasOne('App\Models\Lead', 'referrer_id');
    }

    public function profile()
    {
        
        
        return $this->hasOne(UserProfile::class);
    }
}
