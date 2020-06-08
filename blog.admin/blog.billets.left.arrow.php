<?php	

			$file=basename($_SERVER["SCRIPT_NAME"]);	


				    echo "<form action=\"" . $file . "\" method=\"post\" >";

					    echo "<input type=\"hidden\" name=\"PAGES_BILL\" value=\"" . $PAGEB . "\"/>" ;
						
					   	echo "<input class=\"arrow-left\" type=\"submit\"/>"; 
					 	
		 		    echo "</form>";	
 		 	 	
 		 	 		echo "<span style=\"margin-left:20px;font-size:20px\">" . $PAGES_BILL . " / " . $TOT_PAGES_BILL . "</span>";
		     
?>