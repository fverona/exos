<?php

	$CNT=0; 
	$i=0;		
	$donnees='';
	$TAB_BILL = array ('', '' , '' , '', '' );
	
	$DEB_PAG=($PAGES_BILL -1) * 4 + 1;
	$FIN_PAG=($PAGES_BILL -1) * 4 + 4;

 		$req = $bdd->prepare("SELECT id, titre, contenu, DATE_FORMAT(date_creation, '%d/%m/%Y à %Hh%imin%ssec') as date_creation_fr FROM billets order by id desc");

		$req->execute(array());

		while ($donnees = $req->fetch())		
		{			

				$CNT++;


			 	if ($CNT >= $DEB_PAG &&  $CNT <= $FIN_PAG)
			    {

				    $i++;
					
					$TAB_BILL[$i]=$donnees['id'];


					$file=basename($_SERVER["SCRIPT_NAME"]);

					if ($file == "blog.php")
					{
						 
						echo "<H3 class=\"news\">" . "  " . htmlspecialchars($donnees['titre']) . " " . $donnees['date_creation_fr'] . "</H3>";
						echo "<p class=\"news\">" .  nl2br(htmlspecialchars($donnees['contenu'])) . "</br>" ;
						echo "<a  href=blog.commentaires.php?billet='" . $donnees['id'] . "'>Commentaires</a>" . "</p></br>";
					}	

					else
					{

						echo "<div style=\"margin-left:47%\"><strong> Billet n° " . $donnees['id'] . "</strong></div>"; 			
						echo "<H3 class=\"news\">" . htmlspecialchars($donnees['titre']) . " " . $donnees['date_creation_fr'] . "</H3>";
						echo "<p class=\"news\">" .  nl2br(htmlspecialchars($donnees['contenu'])) .  "</p></br>" ;

					}

			 	}
			
		}
			$req->closeCursor(); 
			
?>			
