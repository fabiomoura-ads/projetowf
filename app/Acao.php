<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acao extends Model
{
    
	protected $table = "acoes";
	
	protected $fillable = [
	
		'id', 'nome',
		
	]
	
	protected $hidden = [
	
		'created_at', 'updated_at'
		
	]
}
