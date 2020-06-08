 		<?php	

 		$req = $bdd->prepare('SELECT id, pseudo, texte, date_creation FROM chat order by id desc limit 0,20');

		$req->execute(array());
		?>
		
		<table>
			<th>Id</th><th>Pseudo</th><th>Texte</th><th>Date</th>

			<?php while ($donnees = $req->fetch())
			{
			echo "<tr><td class=\"td_id\">". $donnees['id']."</td><td class=\"td_pseudo\">".$donnees['pseudo']."</td><td class=\"td_texte\">".$donnees['texte']. "<td>" . $donnees['date_creation'] . "</td></tr>";
				
			}?>
		</table>

		<?php 	$req->closeCursor(); ?> 
