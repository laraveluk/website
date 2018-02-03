<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @var array $fillable */
    protected $fillable = ['title', 'body', 'slug', 'user_id'];
    /** @var array $appends */
    // protected $appends = ['url'];

    /**
     * Set the Route's Key Name
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the URL attribute (helper)
     *
     * @return string
     */
    public function getUrlAttribute()
    {
        return route('posts.show', $this);
    }

    /**
     * A post belongs to a user
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
