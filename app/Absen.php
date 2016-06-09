<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{	
	protected $fillable = ['user_id', 'jenis_absen'];

  	function absen()
  	{
		return $this->belongsTo('App\User');
  	}
}
