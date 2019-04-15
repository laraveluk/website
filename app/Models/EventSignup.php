<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventSignup extends Model
{
    use SoftDeletes;
    
    /** @var array $fillable */
    protected $fillable = ['email', 'year'];   
}
