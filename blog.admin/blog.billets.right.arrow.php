<?php
		    
			$file=basename($_SERVER["SCRIPT_NAME"]);

		     echo "<form action=\"". $file . "\" method=\"post\" >";

			    echo "<input type=\"hidden\" name=\"PAGES_BILL\" value=\"" . $PAGEB . "\"/>" ;

				echo "<input class=\"arrow-right\" type=\"submit\"/>"; 
		     
		     echo "</form>";	
?>