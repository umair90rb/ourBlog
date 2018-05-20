<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $guarded = [];
    public function post()
    {
		return $this->belongesTo(Post::class);
    }
    public function user()
    {
		return $this->belongesTo(User::class);	    		
    }

}
