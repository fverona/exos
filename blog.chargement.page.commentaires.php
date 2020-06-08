<?php

	$CNT=0; 		
	$DEB_PAG=($PAGES_CMT -1) * 4 + 1;
	$FIN_PAG=($PAGES_CMT -1) * 4 + 4;


 		$req = $bdd->prepare("SELECT id, id_billet, auteur, commentaire, date_commentaire FROM commentaires where id_billet = $billet order by id desc");

		$req->execute(array());

		if (!empty($donnees))
		{			


			while ($donnees = $req->fetch())		
			{
				$CNT++;
			
			 	if ($CNT >= $DEB_PAG &&  $CNT <= $FIN_PAG)
				 {
					echo "<H3 class=\"news\">" .  $donnees['auteur'] . "  " . $donnees['date_commentaire'] . "</H3>";
					echo "<p class=\"news\">" . nl2br(htmlspecialchars($donnees['commentaire'])) . "</p></br>";
			 	 }
			}
			
			$req->closeCursor(); 
		}

?>			