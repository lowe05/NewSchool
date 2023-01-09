<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Action extends Eloquent {

	protected $table = 'actions';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('nom');
	protected $visible = array('nom');

	public function users()
	{
		return $this->hasMany('App\Models\Utilisateur');
	}

}