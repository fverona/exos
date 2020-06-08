<?php
		     echo "<form action=\"blog.commentaires.php\" method=\"post\" >";

			    echo "<input type=\"hidden\" name=\"PAGES_CMT\" value=\"" . $PAGEC . "\"/>" ;
			    echo "<input type=\"hidden\" name=\"billet\" value=\"" . $billet . "\"/>" ; 

				echo "<input class=\"arrow-right\" style=\"margin-left:20px\"  type=\"submit\"/>"; 
		     
		     echo "</form>";	
?>