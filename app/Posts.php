<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Posts extends Model
{
    protected $guarded = [];

    public function user() 
    {
    	return $this->belongsTo(User::class);
    }

    public function liked_by()
    {
    	return $this->belongsToMany(User::class);
    }

    public function comments()
    {
    	return $this->hasMany(Comments::class)->orderBy('created_at', 'DESC');
    }
}
