<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusLocalizacao extends Model
{
    
	protected $table = "status_localizacoes";
	protected $timestamps = false;
	
	protected $fillable = [
	
		'id', 'nome',
		
	]
	
}
