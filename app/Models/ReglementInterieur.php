<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class ReglementInterieur extends Eloquent {

	protected $table = 'reglement_interieurs';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('titre', 'sous_titre', 'commentaire', 'fichier');
	protected $visible = array('titre', 'sous_titre', 'commentaire', 'fichier');

	public function cahierdeliaison()
	{
		return $this->belongsTo('App\Models\CahierDeLiaison');
	}

}