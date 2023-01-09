<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Depense extends Eloquent {

	protected $table = 'depenses';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('montant', 'justification', 'commentaire', 'Utilisateur_id', 'annee_id');
	protected $visible = array('montant', 'justification', 'commentaire', 'user_id', 'annee_id');

	public function user()
	{
		return $this->belongsTo('App\Models\Utilisateur');
	}

	public function annee()
	{
		return $this->belongsTo('App\Models\AnneeScolaire');
	}

}