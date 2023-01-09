<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class RemplirCahierDeTexte extends Eloquent {

	protected $table = 'remplir_cahierdetextes';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('prof_id', 'matiere_id', 'typetitre', 'texte', 'cahierdetexte_id');
	protected $visible = array('prof_id', 'matiere_id', 'typetitre', 'texte', 'cahierdetexte_id');

	public function cahierdetexte()
	{
		return $this->belongsTo('App\Models\CahierDeTexte');
	}

}