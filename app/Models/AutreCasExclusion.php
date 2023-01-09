<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class AutreCasExclusion extends Eloquent {

	protected $table = 'autre_cas_exclusions';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('date_exclus', 'motif', 'visa_s_g', 'visa_principal', 'cahierdeliaison_id');
	protected $visible = array('date_exclus', 'motif', 'visa_s_g', 'visa_principal', 'cahierdeliaison_id');

	public function cahierdeliaison()
	{
		return $this->belongsTo('App\Models\CahierDeLiaison');
	}

}