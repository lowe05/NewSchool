<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class ConvocationParent extends Eloquent {

	protected $table = 'convocation_parents';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('concerner', 'date_rdv', 'heures', 'motif', 'statut', 'visa_nom_parent', 'commentaire', 'cahierdeliaison_id');
	protected $visible = array('concerner', 'date_rdv', 'heures', 'motif', 'statut', 'visa_nom_parent', 'commentaire', 'cahierdeliaison_id');

	public function cahierdeliaison()
	{
		return $this->belongsTo('App\Models\CahierDeLiaison');
	}

}