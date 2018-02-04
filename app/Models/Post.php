<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;

    /** @var array $fillable */
    protected $fillable = ['title', 'body', 'slug', 'user_id'];
    /** @var array $appends */
    // protected $appends = ['url'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

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
     * Get the Excerpt attribute (helper)
     *
     * @return string
     */
    public function getExcerptAttribute()
    {
        return str_limit($this->body, 140);
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
