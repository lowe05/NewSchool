<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class AnneeScolaire extends Eloquent {

	protected $table = 'annee_scolaires';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('libelle');
	protected $visible = array('libelle');

	public function classes()
	{
		return $this->hasMany('App\Models\Classe');
	}

	public function modalites()
	{
		return $this->hasMany('App\Models\Modalite');
	}

	public function retard_absence_personnels()
	{
		return $this->hasMany('App\Models\AbsenceRetardPersonnel');
	}

	public function typemodalites()
	{
		return $this->hasMany('App\Models\TypeModalite');
	}

	public function notes()
	{
		return $this->hasMany('App\Models\Note');
	}

	public function listeclasse()
	{
		return $this->hasMany('App\Models\ListeClasse');
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

	public function membreDepartements()
	{
		return $this->hasMany('App\Models\MembreDepartement');
	}

	public function depenses()
	{
		return $this->hasMany('App\Models\Depense');
	}

	public function scolarites()
	{
		return $this->hasMany('App\Models\Scolarite');
	}

	public function departements()
	{
		return $this->hasMany('App\Models\Departement');
	}

	public function cahierdeliaison()
	{
		return $this->hasMany('App\Models\CahierDeLiaison');
	}

}