<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class DemandeAbsence extends Eloquent {

	protected $table = 'demande_absences';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('nom_parent', 'eleve', 'date_debut', 'date_fin', 'motif', 'cahierdeliaison_id');
	protected $visible = array('nom_parent', 'eleve', 'date_debut', 'date_fin', 'motif', 'cahierdeliaison_id');

	public function cahierdeliaison()
	{
		return $this->belongsTo('App\Models\CahierDeLiaison');
	}

}