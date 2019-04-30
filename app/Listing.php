<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //add belongs to relationship

	public function User(){
		return $this->belongsTo('App\User');
	}
}
