<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class MembreDepartement extends Eloquent {

	protected $table = 'membredepartements';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('prof_id', 'departement_id', 'annee_id');
	protected $visible = array('prof_id', 'departement_id', 'annee_id');

	public function professeur()
	{
		return $this->hasOne('App\Models\Utilisateur');
	}

	public function annee()
	{
		return $this->belongsTo('App\Models\AnneeScolaire');
	}

	public function departement()
	{
		return $this->belongsTo('App\Models\Departement');
	}

}