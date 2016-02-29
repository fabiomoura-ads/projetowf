<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    
	protected $table = "locacoes";
	public $timestamps = false;
	
	protected $fillable = [
		
		'id', 'nome', 'latitude', 'longitude', 'endereco',
		
	]
	
	protected $hidden = [
		
	]
}
