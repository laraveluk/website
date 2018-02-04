<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'location', 'password', 'slack_id', 'avatar', 'nickname', 'slug'
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
     * A user has many posts
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany;
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * A user has one profile
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne;
     */
    public function profile()
    {
        return $this->hasOne(Profile::class)->with('socialLinks');
    }
}
