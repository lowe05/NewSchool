<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class RecapulatifAvertissement extends Eloquent {

	protected $table = 'recapitulatif_avertissements';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('motif', 'commentaire', 'visa_s_g', 'cahierdeliaison_id');
	protected $visible = array('motif', 'commentaire', 'visa_s_g', 'cahierdeliaison_id');

	public function cahierdeliaison()
	{
		return $this->belongsTo('App\Models\CahierDeLiaison');
	}

}