<?php	

		     echo "<table>"; 
		     echo "<form action=\"blog.commentaires.php\" method=\"post\" >";

			    echo "<input type=\"hidden\" name=\"billet\" value=\"" . $billet . "\"/>" ; 
			    echo "<input type=\"hidden\" name=\"PAGES_CMT\" value=\"" . $PAGEC . "\"/>" ;
				echo "<input class=\"arrow-left\" style=\"margin-left:550px\"  type=\"submit\"/>"; 

		     
		     echo "</form>";	
 		 	 	
 		 	 	echo "<span style=\"margin-left:20px;font-size:20px\">" . $PAGES_CMT . " / " . $TOT_PAGES_CMT . "</span>";
		     
?>