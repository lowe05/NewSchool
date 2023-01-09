<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('utilisateurs', function(Blueprint $table) {
			$table->foreign('role_id')->references('id')->on('roles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('utilisateurs', function(Blueprint $table) {
			$table->foreign('action_id')->references('id')->on('actions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('info_eleves', function(Blueprint $table) {
			$table->foreign('eleve_id')->references('id')->on('utilisateurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('affectation_prof_classes', function(Blueprint $table) {
			$table->foreign('prof_id')->references('id')->on('utilisateurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('affectation_prof_classes', function(Blueprint $table) {
			$table->foreign('classe_id')->references('id')->on('classes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('affectation_prof_classes', function(Blueprint $table) {
			$table->foreign('matiere_id')->references('id')->on('matieres')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('affectation_prof_classes', function(Blueprint $table) {
			$table->foreign('annee_id')->references('id')->on('annee_scolaires')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('classes', function(Blueprint $table) {
			$table->foreign('niveau_id')->references('id')->on('niveaux')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('classes', function(Blueprint $table) {
			$table->foreign('titulaire_id')->references('id')->on('utilisateurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('classes', function(Blueprint $table) {
			$table->foreign('annee_id')->references('id')->on('annee_scolaires')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('classes', function(Blueprint $table) {
			$table->foreign('delegue_id')->references('id')->on('utilisateurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('classes', function(Blueprint $table) {
			$table->foreign('typesdedivision_id')->references('id')->on('typesdedivisions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('departements', function(Blueprint $table) {
			$table->foreign('chef_id')->references('id')->on('utilisateurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('departements', function(Blueprint $table) {
			$table->foreign('annee_id')->references('id')->on('annee_scolaires')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('emploi_de_temps', function(Blueprint $table) {
			$table->foreign('prof_id')->references('id')->on('utilisateurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('emploi_de_temps', function(Blueprint $table) {
			$table->foreign('classe_id')->references('id')->on('classes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('emploi_de_temps', function(Blueprint $table) {
			$table->foreign('annee_id')->references('id')->on('annee_scolaires')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('depenses', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('utilisateurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('depenses', function(Blueprint $table) {
			$table->foreign('annee_id')->references('id')->on('annee_scolaires')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('scolarites', function(Blueprint $table) {
			$table->foreign('eleve_id')->references('id')->on('utilisateurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('scolarites', function(Blueprint $table) {
			$table->foreign('classe_id')->references('id')->on('classes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('scolarites', function(Blueprint $table) {
			$table->foreign('annee_id')->references('id')->on('annee_scolaires')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('modalites', function(Blueprint $table) {
			$table->foreign('niveau_id')->references('id')->on('niveaux')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('modalites', function(Blueprint $table) {
			$table->foreign('typemodalites')->references('id')->on('typemodalites')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('modalites', function(Blueprint $table) {
			$table->foreign('annee_id')->references('id')->on('annee_scolaires')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('typemodalites', function(Blueprint $table) {
			$table->foreign('annee_id')->references('id')->on('annee_scolaires')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('absences_retards_eleves', function(Blueprint $table) {
			$table->foreign('eleve_id')->references('id')->on('utilisateurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('absences_retards_eleves', function(Blueprint $table) {
			$table->foreign('classe_id')->references('id')->on('classes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('absences_retards_eleves', function(Blueprint $table) {
			$table->foreign('annee_id')->references('id')->on('annee_scolaires')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('retardsAbsencesPersonnels', function(Blueprint $table) {
			$table->foreign('personnel_id')->references('id')->on('utilisateurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('retardsAbsencesPersonnels', function(Blueprint $table) {
			$table->foreign('annee_id')->references('id')->on('annee_scolaires')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('notes', function(Blueprint $table) {
			$table->foreign('eleve_id')->references('id')->on('utilisateurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('notes', function(Blueprint $table) {
			$table->foreign('prof_id')->references('id')->on('utilisateurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('notes', function(Blueprint $table) {
			$table->foreign('matiere_id')->references('id')->on('matieres')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('notes', function(Blueprint $table) {
			$table->foreign('classe_id')->references('id')->on('classes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('notes', function(Blueprint $table) {
			$table->foreign('annee_id')->references('id')->on('annee_scolaires')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('listeclasses', function(Blueprint $table) {
			$table->foreign('eleve_id')->references('id')->on('utilisateurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('listeclasses', function(Blueprint $table) {
			$table->foreign('classe_id')->references('id')->on('classes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('listeclasses', function(Blueprint $table) {
			$table->foreign('annee_id')->references('id')->on('annee_scolaires')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('remplir_cahierdetextes', function(Blueprint $table) {
			$table->foreign('prof_id')->references('id')->on('utilisateurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('remplir_cahierdetextes', function(Blueprint $table) {
			$table->foreign('matiere_id')->references('id')->on('matieres')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('remplir_cahierdetextes', function(Blueprint $table) {
			$table->foreign('cahierdetexte_id')->references('id')->on('cahierdetextes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cahierdeliaisons', function(Blueprint $table) {
			$table->foreign('classe_id')->references('id')->on('classes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cahierdeliaisons', function(Blueprint $table) {
			$table->foreign('eleve_id')->references('id')->on('utilisateurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cahierdeliaisons', function(Blueprint $table) {
			$table->foreign('annee_id')->references('id')->on('annee_scolaires')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('recapitulatif_retenues', function(Blueprint $table) {
			$table->foreign('cahierdeliaison_id')->references('id')->on('cahierdeliaisons')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('recapitulatif_avertissements', function(Blueprint $table) {
			$table->foreign('cahierdeliaison_id')->references('id')->on('cahierdeliaisons')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('punitions', function(Blueprint $table) {
			$table->foreign('cahierdeliaison_id')->references('id')->on('cahierdeliaisons')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('exclusion_de_cours', function(Blueprint $table) {
			$table->foreign('cahierdeliaison_id')->references('id')->on('cahierdeliaisons')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('autre_cas_exclusions', function(Blueprint $table) {
			$table->foreign('cahierdeliaison_id')->references('id')->on('cahierdeliaisons')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('conseil_de_diciplines', function(Blueprint $table) {
			$table->foreign('eleve_id')->references('id')->on('utilisateurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('conseil_de_diciplines', function(Blueprint $table) {
			$table->foreign('cahierdeliaison_id')->references('id')->on('cahierdeliaisons')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('observation_s_gs', function(Blueprint $table) {
			$table->foreign('cahierdeliaison_id')->references('id')->on('cahierdeliaisons')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('observation_parents', function(Blueprint $table) {
			$table->foreign('cahierdeliaison_id')->references('id')->on('cahierdeliaisons')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('demande_rdvs', function(Blueprint $table) {
			$table->foreign('cahierdeliaison_id')->references('id')->on('cahierdeliaisons')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('demande_absences', function(Blueprint $table) {
			$table->foreign('cahierdeliaison_id')->references('id')->on('cahierdeliaisons')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('autorisation_entres_sorties', function(Blueprint $table) {
			$table->foreign('cahierdeliaison_id')->references('id')->on('cahierdeliaisons')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('pageprofs', function(Blueprint $table) {
			$table->foreign('cahierdeliaison_id')->references('id')->on('cahierdeliaisons')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('cahierdetextes', function(Blueprint $table) {
			$table->foreign('classe_id')->references('id')->on('classes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('devoirs', function(Blueprint $table) {
			$table->foreign('cahierdetexte_id')->references('id')->on('cahierdetextes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('membredepartements', function(Blueprint $table) {
			$table->foreign('prof_id')->references('id')->on('utilisateurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('membredepartements', function(Blueprint $table) {
			$table->foreign('departement_id')->references('id')->on('departements')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('membredepartements', function(Blueprint $table) {
			$table->foreign('annee_id')->references('id')->on('annee_scolaires')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('utilisateurs', function(Blueprint $table) {
			$table->dropForeign('utilisateurs_role_id_foreign');
		});
		Schema::table('utilisateurs', function(Blueprint $table) {
			$table->dropForeign('utilisateurs_action_id_foreign');
		});
		Schema::table('info_eleves', function(Blueprint $table) {
			$table->dropForeign('info_eleves_eleve_id_foreign');
		});
		Schema::table('affectation_prof_classes', function(Blueprint $table) {
			$table->dropForeign('affectation_prof_classes_prof_id_foreign');
		});
		Schema::table('affectation_prof_classes', function(Blueprint $table) {
			$table->dropForeign('affectation_prof_classes_classe_id_foreign');
		});
		Schema::table('affectation_prof_classes', function(Blueprint $table) {
			$table->dropForeign('affectation_prof_classes_matiere_id_foreign');
		});
		Schema::table('affectation_prof_classes', function(Blueprint $table) {
			$table->dropForeign('affectation_prof_classes_annee_id_foreign');
		});
		Schema::table('classes', function(Blueprint $table) {
			$table->dropForeign('classes_niveau_id_foreign');
		});
		Schema::table('classes', function(Blueprint $table) {
			$table->dropForeign('classes_titulaire_id_foreign');
		});
		Schema::table('classes', function(Blueprint $table) {
			$table->dropForeign('classes_annee_id_foreign');
		});
		Schema::table('classes', function(Blueprint $table) {
			$table->dropForeign('classes_delegue_id_foreign');
		});
		Schema::table('classes', function(Blueprint $table) {
			$table->dropForeign('classes_typesdedivision_id_foreign');
		});
		Schema::table('departements', function(Blueprint $table) {
			$table->dropForeign('departements_chef_id_foreign');
		});
		Schema::table('departements', function(Blueprint $table) {
			$table->dropForeign('departements_annee_id_foreign');
		});
		Schema::table('emploi_de_temps', function(Blueprint $table) {
			$table->dropForeign('emploi_de_temps_prof_id_foreign');
		});
		Schema::table('emploi_de_temps', function(Blueprint $table) {
			$table->dropForeign('emploi_de_temps_classe_id_foreign');
		});
		Schema::table('emploi_de_temps', function(Blueprint $table) {
			$table->dropForeign('emploi_de_temps_annee_id_foreign');
		});
		Schema::table('depenses', function(Blueprint $table) {
			$table->dropForeign('depenses_user_id_foreign');
		});
		Schema::table('depenses', function(Blueprint $table) {
			$table->dropForeign('depenses_annee_id_foreign');
		});
		Schema::table('scolarites', function(Blueprint $table) {
			$table->dropForeign('scolarites_eleve_id_foreign');
		});
		Schema::table('scolarites', function(Blueprint $table) {
			$table->dropForeign('scolarites_classe_id_foreign');
		});
		Schema::table('scolarites', function(Blueprint $table) {
			$table->dropForeign('scolarites_annee_id_foreign');
		});
		Schema::table('modalites', function(Blueprint $table) {
			$table->dropForeign('modalites_niveau_id_foreign');
		});
		Schema::table('modalites', function(Blueprint $table) {
			$table->dropForeign('modalites_typemodalites_foreign');
		});
		Schema::table('modalites', function(Blueprint $table) {
			$table->dropForeign('modalites_annee_id_foreign');
		});
		Schema::table('typemodalites', function(Blueprint $table) {
			$table->dropForeign('typemodalites_annee_id_foreign');
		});
		Schema::table('absences_retards_eleves', function(Blueprint $table) {
			$table->dropForeign('absences_retards_eleves_eleve_id_foreign');
		});
		Schema::table('absences_retards_eleves', function(Blueprint $table) {
			$table->dropForeign('absences_retards_eleves_classe_id_foreign');
		});
		Schema::table('absences_retards_eleves', function(Blueprint $table) {
			$table->dropForeign('absences_retards_eleves_annee_id_foreign');
		});
		Schema::table('retardsAbsencesPersonnels', function(Blueprint $table) {
			$table->dropForeign('retardsAbsencesPersonnels_personnel_id_foreign');
		});
		Schema::table('retardsAbsencesPersonnels', function(Blueprint $table) {
			$table->dropForeign('retardsAbsencesPersonnels_annee_id_foreign');
		});
		Schema::table('notes', function(Blueprint $table) {
			$table->dropForeign('notes_eleve_id_foreign');
		});
		Schema::table('notes', function(Blueprint $table) {
			$table->dropForeign('notes_prof_id_foreign');
		});
		Schema::table('notes', function(Blueprint $table) {
			$table->dropForeign('notes_matiere_id_foreign');
		});
		Schema::table('notes', function(Blueprint $table) {
			$table->dropForeign('notes_classe_id_foreign');
		});
		Schema::table('notes', function(Blueprint $table) {
			$table->dropForeign('notes_annee_id_foreign');
		});
		Schema::table('listeclasses', function(Blueprint $table) {
			$table->dropForeign('listeclasses_eleve_id_foreign');
		});
		Schema::table('listeclasses', function(Blueprint $table) {
			$table->dropForeign('listeclasses_classe_id_foreign');
		});
		Schema::table('listeclasses', function(Blueprint $table) {
			$table->dropForeign('listeclasses_annee_id_foreign');
		});
		Schema::table('remplir_cahierdetextes', function(Blueprint $table) {
			$table->dropForeign('remplir_cahierdetextes_prof_id_foreign');
		});
		Schema::table('remplir_cahierdetextes', function(Blueprint $table) {
			$table->dropForeign('remplir_cahierdetextes_matiere_id_foreign');
		});
		Schema::table('remplir_cahierdetextes', function(Blueprint $table) {
			$table->dropForeign('remplir_cahierdetextes_cahierdetexte_id_foreign');
		});
		Schema::table('cahierdeliaisons', function(Blueprint $table) {
			$table->dropForeign('cahierdeliaisons_classe_id_foreign');
		});
		Schema::table('cahierdeliaisons', function(Blueprint $table) {
			$table->dropForeign('cahierdeliaisons_eleve_id_foreign');
		});
		Schema::table('cahierdeliaisons', function(Blueprint $table) {
			$table->dropForeign('cahierdeliaisons_annee_id_foreign');
		});
		Schema::table('recapitulatif_retenues', function(Blueprint $table) {
			$table->dropForeign('recapitulatif_retenues_cahierdeliaison_id_foreign');
		});
		Schema::table('recapitulatif_avertissements', function(Blueprint $table) {
			$table->dropForeign('recapitulatif_avertissements_cahierdeliaison_id_foreign');
		});
		Schema::table('punitions', function(Blueprint $table) {
			$table->dropForeign('punitions_cahierdeliaison_id_foreign');
		});
		Schema::table('exclusion_de_cours', function(Blueprint $table) {
			$table->dropForeign('exclusion_de_cours_cahierdeliaison_id_foreign');
		});
		Schema::table('autre_cas_exclusions', function(Blueprint $table) {
			$table->dropForeign('autre_cas_exclusions_cahierdeliaison_id_foreign');
		});
		Schema::table('conseil_de_diciplines', function(Blueprint $table) {
			$table->dropForeign('conseil_de_diciplines_eleve_id_foreign');
		});
		Schema::table('conseil_de_diciplines', function(Blueprint $table) {
			$table->dropForeign('conseil_de_diciplines_cahierdeliaison_id_foreign');
		});
		Schema::table('observation_s_gs', function(Blueprint $table) {
			$table->dropForeign('observation_s_gs_cahierdeliaison_id_foreign');
		});
		Schema::table('observation_parents', function(Blueprint $table) {
			$table->dropForeign('observation_parents_cahierdeliaison_id_foreign');
		});
		Schema::table('demande_rdvs', function(Blueprint $table) {
			$table->dropForeign('demande_rdvs_cahierdeliaison_id_foreign');
		});
		Schema::table('demande_absences', function(Blueprint $table) {
			$table->dropForeign('demande_absences_cahierdeliaison_id_foreign');
		});
		Schema::table('autorisation_entres_sorties', function(Blueprint $table) {
			$table->dropForeign('autorisation_entres_sorties_cahierdeliaison_id_foreign');
		});
		Schema::table('pageprofs', function(Blueprint $table) {
			$table->dropForeign('pageprofs_cahierdeliaison_id_foreign');
		});
		Schema::table('cahierdetextes', function(Blueprint $table) {
			$table->dropForeign('cahierdetextes_classe_id_foreign');
		});
		Schema::table('devoirs', function(Blueprint $table) {
			$table->dropForeign('devoirs_cahierdetexte_id_foreign');
		});
		Schema::table('membredepartements', function(Blueprint $table) {
			$table->dropForeign('membredepartements_prof_id_foreign');
		});
		Schema::table('membredepartements', function(Blueprint $table) {
			$table->dropForeign('membredepartements_departement_id_foreign');
		});
		Schema::table('membredepartements', function(Blueprint $table) {
			$table->dropForeign('membredepartements_annee_id_foreign');
		});
	}
}