<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class InfoEleve extends Eloquent {

	protected $table = 'info_eleves';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('classe', 'nom_pere', 'tel_pere', 'fonction_pere', 'email_pere', 'nom_mere', 'tel_mere', 'fonction_mere', 'email_mere', 'nom_tuteur', 'tel_tuteur', 'fonction_tuteur', 'email_tuteur', 'parcour_scolaire', 'allergie', 'type_allergie', 'tel_hopital', 'fichier1', 'fichier2', 'fichier3', 'eleve_id');
	protected $visible = array('classe', 'nom_pere', 'tel_pere', 'fonction_pere', 'email_pere', 'nom_mere', 'tel_mere', 'fonction_mere', 'email_mere', 'nom_tuteur', 'tel_tuteur', 'fonction_tuteur', 'email_tuteur', 'parcour_scolaire', 'allergie', 'type_allergie', 'tel_hopital', 'fichier1', 'fichier2', 'fichier3', 'eleve_id');

	public function eleve()
	{
		return $this->belongsTo('App\Models\Utilisateur');
	}

}