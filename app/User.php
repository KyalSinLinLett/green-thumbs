<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Posts;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*
    when user created, this will automatically fill the profile with default values.
    */
    public static function boot()
    {
        parent::boot();

        static::created(
            function ($user) {
                $user->profile()->create([
                    'bio' => "Stay green!", 
                ]);
            });
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function posts() 
    {
        return $this->hasMany(Posts::class)->orderBy('created_at', 'DESC');
    }
}
