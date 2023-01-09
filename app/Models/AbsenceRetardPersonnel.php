<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class AbsenceRetardPersonnel extends Eloquent {

	protected $table = 'retardsAbsencesPersonnels';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('personnel_id', 'absent', 'retard', 'de', 'a', 'justification', 'commentaire', 'annee_id');
	protected $visible = array('personnel_id', 'absent', 'retard', 'de', 'a', 'justification', 'commentaire', 'annee_id');

	public function personnel()
	{
		return $this->belongsTo('App\Models\Utilisateur');
	}

	public function annee()
	{
		return $this->belongsTo('App\Models\AnneeScolaire');
	}

}