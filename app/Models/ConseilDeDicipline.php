<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class ConseilDeDicipline extends Eloquent {

	protected $table = 'conseil_de_diciplines';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('eleve_id', 'date_prevu', 'heures', 'visa_pr_conseil', 'visa_nom_parent', 'verdict', 'visa_apres_pr_conseil', 'visa_apres_parent', 'cahierdeliaison_id');
	protected $visible = array('eleve_id', 'date_prevu', 'heures', 'visa_pr_conseil', 'visa_nom_parent', 'verdict', 'visa_apres_pr_conseil', 'visa_apres_parent', 'cahierdeliaison_id');

	public function cahierdeliaison()
	{
		return $this->belongsTo('App\Models\CahierDeLiaison');
	}

}