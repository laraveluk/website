<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;

    /**
     * A Role belongs to many Users
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMangy
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
