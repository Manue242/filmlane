<h3>Ajout d'un nouveau réalisateur</h3>
<form method="post">
	<table>
		<tr>
			<td>Nom du réalisateur </td>
			<td><input type="text" name="nom" 
				value="<?= ($laClasse!=null)?$la['nom']:'' ?>" >
			</td>
		</tr>
		<tr>
			<td> Prenom du réalisateur </td>
			<td><input type="text" name="prenom" 
				value="<?= ($laClasse!=null)?$laClasse['prenom']:'' ?>" >
			</td>	
		</tr>
		<tr>
			<td> Date de Naissance </td>
			<td><input type="text" name="dateNaissance" 
				value="<?= ($laClasse!=null)?$laClasse['dateNaissance']:'' ?>" >
			</td>
		</tr>
		<tr>
			<td> Nationalité </td>
			<td><input type="text" name="nationalite" 
				value="<?= ($laClasse!=null)?$laClasse['nationalite']:'' ?>" >
			</td>
		</tr>
		<tr>
			<td> Date de Décès </td>
			<td><input type="text" name="dateDeces" 
				value="<?= ($laClasse!=null)?$laClasse['dateDeces']:'' ?>" >
			</td>
		</tr>
		<tr>
			<td> Date de Début</td>
			<td><input type="text" name="dateDebut" 
				value="<?= ($laClasse!=null)?$laClasse['dateDebut']:'' ?>" >
			</td>
		</tr>
		<tr>
			<td> Date de Fin </td>
			<td><input type="text" name="dateFin" 
				value="<?= ($laClasse!=null)?$laClasse['dateFin']:'' ?>" >
			</td>
		</tr>
		<tr>
			<td> Activité</td>
			<td><input type="text" name="activite" 
				value="<?= ($laClasse!=null)?$laClasse['activite']:'' ?>" >
			</td>
		</tr>


        <tr>
			<td> Film  </td>
			<td>
			<select name="Id_film">
				<?php
				foreach ($lesFilms as $unFilm) 
                {
					echo "<option value='"; 
					echo $unFilm['Id_Film']; 
					echo "'>"; 
					echo $unFIlm['nom']; 
					echo "</option>";
				}
				?>
			</select>
			</td>
		</tr>


		<tr>
			<td><input type="reset" name="Annuler" value="Annuler"> </td>
			<td>
				<?= ($laClasse!=null)? '<input type="submit" name="Modifier" value="Modifier">' : '
				<input type="submit" name="Valider" value="Valider">' ?>

			</td>
		</tr>
		<?= ($laClasse!=null)? '<input type="hidden" name="idclasse" 
		value ="'.$laClasse['idclasse'].'">'   :  '' ?>
	</table>
</form>


