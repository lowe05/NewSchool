<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Matiere extends Eloquent {

	protected $table = 'matieres';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('nom');
	protected $visible = array('nom');

	public function notes()
	{
		return $this->hasMany('App\Models\Note');
	}

	public function affectationProfs()
	{
		return $this->hasMany('App\Models\AffectationProfClasse');
	}

}