<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Punition extends Eloquent {

	protected $table = 'punitions';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('date_punition', 'nature_punition', 'visa_autorite', 'visa_s_g_apres_excut', 'nom_visa_parent', 'cahierdeliaison_id');
	protected $visible = array('date_punition', 'nature_punition', 'visa_autorite', 'visa_s_g_apres_excut', 'nom_visa_parent', 'cahierdeliaison_id');

	public function cahierdeliaison()
	{
		return $this->belongsTo('App\Models\CahierDeLiaison');
	}

}