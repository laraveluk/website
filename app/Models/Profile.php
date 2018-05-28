<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'profile_key_id', 'value'
    ];

    /**
     * A post belongs to a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo;
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * A profile belongs to a profile key
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function profile_key()
    {
        return $this->belongsTo(ProfileKey::class);
    }

    /**
     * A profile belongs to a profile key
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function social_links()
    {
        return $this->hasMany(SocialLinks::class);
    }

}
