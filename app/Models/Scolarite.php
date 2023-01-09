<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Scolarite extends Eloquent {

	protected $table = 'scolarites';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('eleve_id', 'classe_id', 'montant', 'annee_id');
	protected $visible = array('eleve_id', 'classe_id', 'montant', 'annee_id');

	public function eleve()
	{
		return $this->belongsTo('App\Models\Utilisateur');
	}

	public function classe()
	{
		return $this->belongsTo('App\Models\Classe');
	}

	public function annee()
	{
		return $this->belongsTo('App\Models\AnneeScolaire');
	}

}