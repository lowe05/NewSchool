<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class PageProf extends Eloquent {

	protected $table = 'pageprofs';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('mois', 'observation', 'nom_prof', 'cahierdeliaison_id');
	protected $visible = array('mois', 'observation', 'nom_prof', 'cahierdeliaison_id');

	public function cahierdeliaison()
	{
		return $this->belongsTo('App\Models\CahierDeLiaison');
	}

}