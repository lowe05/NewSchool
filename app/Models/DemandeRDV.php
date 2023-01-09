<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class DemandeRDV extends Eloquent {

	protected $table = 'demande_rdvs';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('moi', 'avec', 'jour_disponible', 'motif', 'visa_senseur', 'statut', 'accorder_le', 'nom_parent', 'confirmation', 'conf_le', 'heure_conf', 'cahierdeliaison_id');
	protected $visible = array('moi', 'avec', 'jour_disponible', 'motif', 'visa_senseur', 'statut', 'accorder_le', 'nom_parent', 'confirmation', 'conf_le', 'heure_conf', 'cahierdeliaison_id');

	public function cahierdeliaison()
	{
		return $this->belongsTo('App\Models\CahierDeLiaison');
	}

}