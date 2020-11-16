<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Posts;

class Comments extends Model
{
    protected $guarded = [];

    public function post()
    {
    	return $this->belongsTo(Posts::class);
    }
}
