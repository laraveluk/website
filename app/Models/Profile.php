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
        'past', 'present', 'future', 'hobbies'
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
     * A profile has many socialLinks
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany;
     */
    public function socialLinks()
    {
        return $this->hasMany(SocialLinks::class);
    }
}
