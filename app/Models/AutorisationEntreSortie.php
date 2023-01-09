<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class AutorisationEntreSortie extends Eloquent {

	protected $table = 'autorisation_entres_sorties';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('eleve', 'type_autorisation', 'date_absence', 'date_absence1', 'motif', 'vue_parent', 'date_entrant', 'heures_entrant', 'statut_absence', 'cahierdeliaison_id');
	protected $visible = array('eleve', 'type_autorisation', 'date_absence', 'date_absence1', 'motif', 'vue_parent', 'date_entrant', 'heures_entrant', 'statut_absence', 'cahierdeliaison_id');

	public function cahierdeliaison()
	{
		return $this->belongsTo('App\Models\CahierDeLiaison');
	}

}