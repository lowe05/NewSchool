<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Departement extends Eloquent {

	protected $table = 'departements';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('nom', 'chef_id', 'annee_id');
	protected $visible = array('nom', 'chef_id', 'annee_id');

	public function membreDepartements()
	{
		return $this->hasMany('App\Models\MembreDepartement');
	}

	public function responsable()
	{
		return $this->hasOne('App\Models\Utilisateur');
	}

	public function annee()
	{
		return $this->belongsTo('App\Models\AnneeScolaire');
	}

}