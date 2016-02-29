<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusUser extends Model
{
    
	protected $timestamps = false;
	
	protected $fillable = [
	
		'id', 'nome',
		
	]
	
	
}
