

<?php
	
	require_once ("vue/vue_insert_acteurs.php"); 

	if(isset($_POST['Valider'])){
		$unControleur->insertActeur($_POST); 
	}	
	$lesActeurs = $unControleur->selectAllActeurs(); 
	
	require_once ("vue/vue_les_acteurs.php"); 
?>