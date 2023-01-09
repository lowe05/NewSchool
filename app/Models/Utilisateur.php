<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Utilisateur extends Eloquent {

	protected $table = 'users';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('matricule', 'nom', 'prenom', 'ville', 'quartier', 'email', 'telephone', 'role_id', 'statut', 'action_id', 'photo_profil', 'slug', 'sexe', 'nationalite', 'date_naissance');
	protected $visible = array('matricule', 'nom', 'prenom', 'ville', 'quartier', 'email', 'telephone', 'role_id', 'statut', 'action_id', 'photo_profil', 'slug', 'sexe', 'nationalite', 'date_naissance');

	public function infoEleve()
	{
		return $this->hasOne('App\Models\InfoEleve');
	}

	public function retard_absence_personnels()
	{
		return $this->hasMany('App\Models\AbsenceRetardPersonnel');
	}

	public function notes()
	{
		return $this->hasOne('App\Models\Note');
	}

	public function listeclasse()
	{
		return $this->belongsTo('App\Models\ListeClasse');
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

	public function membreDepartement()
	{
		return $this->belongsTo('App\Models\MembreDepartement');
	}

	public function depenses()
	{
		return $this->hasMany('App\Models\Depense');
	}

	public function scolarites()
	{
		return $this->hasMany('App\Models\Scolarite');
	}

	public function departement()
	{
		return $this->belongsTo('App\Models\Departement');
	}

	public function cahierdeliaison()
	{
		return $this->hasOne('App\Models\CahierDeLiaison');
	}

	public function role()
	{
		return $this->belongsTo('App\Models\Role');
	}

	public function action()
	{
		return $this->belongsTo('App\Models\Action');
	}

}