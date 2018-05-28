<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileKey extends Model
{
    protected $fillable = ['name', 'type'];

    /**
     * A profile key has many profiles
     */
    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }

    public function getTypeAttribute($value)
    {
        return (new \App\Enums\ProfileKeys())->getType($value);
    }
}
