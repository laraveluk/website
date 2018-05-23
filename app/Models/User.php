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
     * A user has many promotions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function promotions()
    {
        return $this->hasMany(Promotion::class);
    }

	/**
	 * A user has many profile key/pairs
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function profiles() {
		return $this->hasMany(Profile::class);
	}

    /**
     * User is linked to a role
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    /**
     * Check User role
     *
     * @param string $name
     * @return bool
     */
    public function hasRole($name)
    {
        foreach ($this->roles as $role) {
            if ($role->name == $name) {
                return true;
            }
        }

        return false;
    }

    /**
     * Assign user to role
     *
     * @param App\Models\Role $role
     */
    public function assignRole(Role $role)
    {
        $this->roles()->attach($role);
    }

    /**
     * Remove user role
     *
     * @param App\Models\Role $role
     * @return int
     */
    public function removeRole($role)
    {
        return $this->roles()->detach($role);
    }

    /**
     * Get the avatar attribute
     * 
     * @param string $avatar
     * @return string
     */
    public function getAvatarAttribute($avatar)
    {
        if (is_null($avatar) || empty($avatar)) {
            return asset('/images/default-avatar.png');
        } else {
            return $avatar;
        }
    }
}
