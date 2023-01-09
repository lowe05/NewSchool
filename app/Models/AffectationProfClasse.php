<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class AffectationProfClasse extends Eloquent {

	protected $table = 'affectation_prof_classes';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('prof_id', 'classe_id', 'matiere_id', 'annee_id');
	protected $visible = array('prof_id', 'matiere_id', 'annee_id');

	public function professeur()
	{
		return $this->belongsTo('App\Models\Utilisateur');
	}

	public function classe()
	{
		return $this->belongsTo('App\Models\Classe');
	}

	public function matiere()
	{
		return $this->belongsTo('App\Models\Matiere');
	}

	public function annee()
	{
		return $this->belongsTo('App\Models\AnneeScolaire');
	}

}