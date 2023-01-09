<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Modalite extends Eloquent {

	protected $table = 'modalites';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('niveau_id', 'montant', 'typemodalites', 'annee_id', 'delai_paie');
	protected $visible = array('niveau_id', 'montant', 'typemodalites', 'annee_id', 'delai_paie');

	public function annee()
	{
		return $this->belongsTo('App\Models\AnneeScolaire');
	}

	public function niveau()
	{
		return $this->belongsTo('App\Models\Niveau');
	}

	public function typemodalite()
	{
		return $this->belongsTo('App\Models\TypeModalite');
	}

}