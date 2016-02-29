<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusAmigo extends Model
{
   
   	protected $timestamps = false;
	
	protected $fillable = [
	
		'id', 'nome',
		
	]
	
}
