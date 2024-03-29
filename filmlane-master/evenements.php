<h2>Gestion des étudiants</h2>
<?php
	$lesEvenements = $unControleur->selectAllEvenements(); 
	require_once ("vue/vue_insert_evenement.php"); 

	if(isset($_POST['Valider'])){
		$unControleur->insertEvenement($_POST); 
	}
	$lesEvenements =$unControleur->selectAllEvenements(); 
	
	require_once ("vue/vue_les_evenements.php"); 
?>
