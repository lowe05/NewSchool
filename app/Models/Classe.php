<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Classe extends Eloquent {

	protected $table = 'classes';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('nom', 'niveau_id', 'titulaire_id', 'annee_id', 'delegue_id', 'typesdedivision_id');
	protected $visible = array('nom', 'niveau_id', 'titulaire_id', 'annee_id', 'delegue_id', 'typesdedivision_id');

	public function anneeScolaire()
	{
		return $this->belongsTo('App\Models\AnneeScolaire');
	}

	public function notes()
	{
		return $this->hasMany('App\Models\Note');
	}

	public function niveau()
	{
		return $this->belongsTo('App\Models\Niveau');
	}

	public function listeclasse()
	{
		return $this->hasOne('App\Models\ListeClasse');
	}

	public function retard_absence_eleves()
	{
		return $this->hasMany('App\Models\AbsenceRetard');
	}

	public function emploiDeTemps()
	{
		return $this->hasMany('App\Models\EmploiDeTemp');
	}

	public function affectationProfs()
	{
		return $this->hasMany('App\Models\AffectationProfClasse');
	}

	public function cahierdetexte()
	{
		return $this->hasOne('App\Models\CahierDeTexte');
	}

	public function typesdedivision()
	{
		return $this->belongsTo('App\Models\TypesDeDivision');
	}

	public function scolarites()
	{
		return $this->hasMany('App\Models\Scolarite');
	}

	public function cahierdeliaison()
	{
		return $this->hasOne('App\Models\CahierDeLiaison');
	}

}