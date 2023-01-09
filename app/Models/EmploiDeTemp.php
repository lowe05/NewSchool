<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class EmploiDeTemp extends Eloquent {

	protected $table = 'emploi_de_temps';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('jours', 'heures', 'prof_id', 'classe_id', 'annee_id');
	protected $visible = array('jours', 'heures', 'prof_id', 'classe_id', 'annee_id');

	public function professeur()
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