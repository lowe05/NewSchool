<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class ObservationParent extends Eloquent {

	protected $table = 'observation_parents';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('date_observe', 'remarque', 'nom_parent', 'cahierdeliaison_id');
	protected $visible = array('date_observe', 'remarque', 'nom_parent', 'cahierdeliaison_id');

	public function cahierdeliaison()
	{
		return $this->belongsTo('App\Models\CahierDeLiaison');
	}

}