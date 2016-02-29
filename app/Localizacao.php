<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{
    
	protected $table = "localizacoes";
	protected $timestamps = false;
	
	protected $fillable = [
		
		'id', 'local_id', 'acao_id', 'user_id', 'data_inicial', 'hora_inicial', 'data_final',  'hora_final',
		
	]
	
	protected $hidden = [
	
	]
}
