<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentTaggable\Taggable;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable, Taggable;

    /** @var array $fillable */
    protected $fillable = ['title', 'body', 'slug', 'user_id', 'post_type', 'approved', 'approved_by'];
    
    /** @var array $appends */
    protected $appends = ['excerpt'];

    protected $casts = [
        'approved' => 'boolean'
    ];

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
     * Return only approved posts
     *
     * @param $query
     * @return mixed
     */
    public function scopeApproved($query)
    {
        return $query->where('approved', 1)->orderBy('created_at', 'DESC');
    }

    /**
     * Get the URL attribute (helper)
     *
     * @return string
     */
    public function getUrlAttribute()
    {
        return route('frontend.posts.show', [$this->post_type, $this]);
    }

    /**
     * Get the Excerpt attribute (helper)
     *
     * @return string
     */
    public function getExcerptAttribute()
    {
        return str_limit(strip_tags($this->body), 140);
    }

    /**
     * A post belongs to a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    /**
     * A post has and belongs to many comments
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments()
    {
        return $this->morphMany(\App\Models\Comment::class, 'commentable');
    }
}
