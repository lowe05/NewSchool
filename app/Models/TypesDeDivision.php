<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class TypesDeDivision extends Eloquent {

	protected $table = 'typesdedivisions';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('nom');
	protected $visible = array('nom');

	public function classes()
	{
		return $this->hasMany('App\Models\Classe');
	}

}