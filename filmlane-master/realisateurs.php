<h2> Gestion des Réalisateurs</h2>
<?php
	$lesClasses = $unControleur->selectAllRealisateurs(); 
	$lesProfesseurs = $unControleur->selectAllRealisateurs(); 
	require_once ("vue/vue_insert_realisateur.php"); 
	if(isset($_POST['Valider'])){
		$unControleur->insertRealisateur($_POST); 
	}

	$lesEnseignements = $unControleur->selectAllRealisateurs(); 
	
	require_once ("vue/vue_les_realisateurs.php"); 
?>
