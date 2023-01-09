<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class RecapulatifRetenue extends Eloquent {

	protected $table = 'recapitulatif_retenues';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('date_faute', 'faute', 'date_excution_retenue', 'nom_visa_parent', 'visa_surveillant_apres_execut', 'visa_s_g', 'cahierdeliaison_id');
	protected $visible = array('date_faute', 'faute', 'date_excution_retenue', 'nom_visa_parent', 'visa_surveillant_apres_execut', 'visa_s_g', 'cahierdeliaison_id');

	public function cahierdeliaison()
	{
		return $this->belongsTo('App\Models\CahierDeLiaison');
	}

}