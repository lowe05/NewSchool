<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class ExclusionDeCour extends Eloquent {

	protected $table = 'exclusion_de_cours';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('date_heure', 'motif', 'punition', 'visa_prof', 'visa_s_g', 'visa_nom_parent', 'cahierdeliaison_id');
	protected $visible = array('date_heure', 'motif', 'punition', 'visa_prof', 'visa_s_g', 'visa_nom_parent', 'cahierdeliaison_id');

	public function cahierdeliaison()
	{
		return $this->belongsTo('App\Models\CahierDeLiaison');
	}

}