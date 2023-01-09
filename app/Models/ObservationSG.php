<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class ObservationSG extends Eloquent {

	protected $table = 'observation_s_gs';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('sequence', 'remarque', 'cahierdeliaison_id');
	protected $visible = array('sequence', 'remarque', 'cahierdeliaison_id');

	public function cahierdeliaison()
	{
		return $this->belongsTo('App\Models\CahierDeLiaison');
	}

}