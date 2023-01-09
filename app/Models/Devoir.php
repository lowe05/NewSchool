<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Devoir extends Eloquent {

	protected $table = 'devoirs';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('titre', 'contenu', 'cahierdetexte_id');
	protected $visible = array('titre', 'contenu', 'cahierdetexte_id');

	public function cahierdetexte()
	{
		return $this->belongsTo('App\Models\CahierDeTexte');
	}

}