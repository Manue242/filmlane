<h2>Liste des Realisateurs</h2>
<table border ='1'>
	<tr> 
		<td> Id Realisateur </td> 
		<td> Nom  </td>
		<td> Prénom </td> 
        <td> Date de Naissance  </td> 
        <td> Nationalité  </td> 
        <td> Biographie  </td>
        <td> Date de Décès  </td> 
        <td> Date de début d'Activité  </td>
        <td> Date de Fin  </td>  
        <td> Activité  </td> 
		<td> Adresse  </td> 
		<td> Email  </td> 
		<td> Id Films  </td> 
	<tr> 
	<?php
	foreach ($lesRealisateurs as $unRealisateur) {
		echo "<tr>"; 
		echo "<td>".$unRealisateur['id_rea']."</td>"; 
		echo "<td>".$unRealisateur['nom']."</td>"; 
		echo "<td>".$unRealisateur['prenom']."</td>"; 
        echo "<td>".$unRealisateur['Date de Naissance']."</td>"; 
        echo "<td>".$unRealisateur['Nationalité']."</td>"; 
        echo "<td>".$unRealisateur['Date de Décès']."</td>"; 
        echo "<td>".$unRealisateur['Date de début Activité']."</td>"; 
        echo "<td>".$unRealisateur['Date de Fin']."</td>"; 
        echo "<td>".$unRealisateur['Activité']."</td>"; 
		echo "<td>".$unRealisateur['adresse']."</td>"; 
		echo "<td>".$unRealisateur['email']."</td>";
        echo "<td>".$unRealisateur['id Films']."</td>";
		
		echo "<tr/>";
	}
	?>
</table>