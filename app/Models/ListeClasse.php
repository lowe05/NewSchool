<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class ListeClasse extends Eloquent {

	protected $table = 'listeclasses';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('eleve_id', 'classe_id', 'annee_id');
	protected $visible = array('eleve_id', 'classe_id', 'annee_id');

	public function eleves()
	{
		return $this->hasMany('App\Models\Utilisateur');
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