<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class CahierDeTexte extends Eloquent {

	protected $table = 'cahierdetextes';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('classe_id');
	protected $visible = array('classe_id');

	public function devoirs()
	{
		return $this->hasMany('App\Models\Devoir');
	}

	public function remplissages()
	{
		return $this->hasMany('App\Models\RemplirCahierDeTexte');
	}

	public function classe()
	{
		return $this->belongsTo('App\Models\Classe');
	}

}