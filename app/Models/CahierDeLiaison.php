<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class CahierDeLiaison extends Eloquent {

	protected $table = 'cahierdeliaisons';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('classe_id', 'eleve_id', 'professeur', 'annee_id');
	protected $visible = array('classe_id', 'eleve_id', 'professeur', 'annee_id');

	public function classe()
	{
		return $this->belongsTo('App\Models\Classe');
	}

	public function eleve()
	{
		return $this->belongsTo('App\Models\Utilisateur');
	}

	public function annee()
	{
		return $this->belongsTo('App\Models\AnneeScolaire');
	}

	public function pageprofesseur()
	{
		return $this->hasMany('App\Models\PageProf');
	}

	public function demandeRdv()
	{
		return $this->hasMany('App\Models\DemandeRDV');
	}

	public function reglementinterieurs()
	{
		return $this->hasMany('App\Models\ReglementInterieur');
	}

	public function punitions()
	{
		return $this->hasMany('App\Models\Punition');
	}

	public function avertissements()
	{
		return $this->hasMany('App\Models\RecapulatifAvertissement');
	}

	public function convocationparents()
	{
		return $this->hasMany('App\Models\ConvocationParent');
	}

	public function recapRetenus()
	{
		return $this->hasMany('App\Models\RecapulatifRetenue');
	}

	public function exclusioncours()
	{
		return $this->hasMany('App\Models\ExclusionDeCour');
	}

	public function autreExclusions()
	{
		return $this->hasMany('App\Models\AutreCasExclusion');
	}

	public function observationSGs()
	{
		return $this->hasMany('App\Models\ObservationSG');
	}

	public function conseilDiciplines()
	{
		return $this->hasMany('App\Models\ConseilDeDicipline');
	}

	public function observationParents()
	{
		return $this->hasMany('App\Models\ObservationParent');
	}

	public function demandeRdvs()
	{
		return $this->hasMany('App\Models\DemandeAbsence');
	}

	public function autorisations()
	{
		return $this->hasMany('App\Models\AutorisationEntreSortie');
	}

}