<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class AbsenceRetard extends Eloquent {

	protected $table = 'absences_retards_eleves';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('eleve_id', 'classe_id', 'retard', 'absent', 'present', 'de', 'a', 'justification', 'commentaire', 'annee_id');
	protected $visible = array('eleve_id', 'classe_id', 'retard', 'absent', 'present', 'de', 'a', 'justification', 'commentaire', 'annee_id');

	public function eleve()
	{
		return $this->belongsTo('App\Models\Utilisateur');
	}

	public function annee()
	{
		return $this->belongsTo('App\Models\AnneeScolaire');
	}

	public function classe()
	{
		return $this->belongsTo('App\Models\Classe');
	}

}