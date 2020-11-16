<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Profile extends Model
{

	protected $fillable = ['bio', 'image'];

    public function profileImage(){
        $imagePath = ($this->image) ? ($this->image) : 'profile/default-profile-picture.jpg';
        return '/storage/' . $imagePath;
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function followers()
    {
    	return $this->belongsToMany(User::class);
    }
}
