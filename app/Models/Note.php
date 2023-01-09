<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Note extends Eloquent {

	protected $table = 'notes';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('eleve_id', 'prof_id', 'matiere_id', 'notation', 'coef', 'note_coef', 'mention', 'appreciation', 'classe_id', 'annee_id');
	protected $visible = array('eleve_id', 'prof_id', 'matiere_id', 'notation', 'coef', 'note_coef', 'mention', 'appreciation', 'classe_id', 'annee_id');

	public function eleve()
	{
		return $this->belongsTo('App\Models\Utilisateur');
	}

	public function professeur()
	{
		return $this->belongsTo('App\Models\Utilisateur');
	}

	public function matiere()
	{
		return $this->belongsTo('App\Models\Matiere');
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