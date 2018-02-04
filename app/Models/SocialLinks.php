<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialLinks extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url', 'icon'
    ];

    /**
     * A socialLink belongs to a profile
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo;
     */
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }
}
