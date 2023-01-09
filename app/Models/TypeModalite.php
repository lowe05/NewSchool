<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class TypeModalite extends Eloquent {

	protected $table = 'typemodalites';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('nom', 'annee_id');
	protected $visible = array('nom', 'annee_id');

	public function modalites()
	{
		return $this->hasMany('App\Models\Modalite');
	}

	public function annee()
	{
		return $this->belongsTo('App\Models\AnneeScolaire');
	}

}