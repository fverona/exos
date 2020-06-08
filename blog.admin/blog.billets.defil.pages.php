<?php
			
			 if ( $PAGES_BILL < $TOT_PAGES_BILL && $PAGES_BILL > 1)
			 {
				     echo "<table>"; 

				     	$PAGEB=($PAGES_BILL - 1);
				    	include("blog.billets.left.arrow.php");

				     	$PAGEB=($PAGES_BILL + 1);
				    	include("blog.billets.right.arrow.php");

				     echo "</table>";
		     } 


		

			 if ($PAGES_BILL == $TOT_PAGES_BILL && $PAGES_BILL > 1) 
			 {
				     echo "<table>"; 
				    
				     	$PAGEB=($PAGES_BILL - 1);
				    	include("blog.billets.left.arrow.php");

				     	$PAGEB=($PAGES_BILL);
				    	include("blog.billets.right.arrow.php");
				    
				     echo "</table>"; 
			 }	

		

			 if ( $PAGES_BILL == 1 && $TOT_PAGES_BILL > 1 )
			 {

				     echo "<table>"; 

				    	$PAGEB=1;
				    	include("blog.billets.left.arrow.php");

				     	$PAGEB=($PAGES_BILL + 1);
				    	include("blog.billets.right.arrow.php");

				     echo "</table>"; 
	
			 }

		

			 if ( $TOT_PAGES_BILL < 2 )
			 {

				     echo "<table>"; 

				     	$PAGEB=1;
				    	include("blog.billets.left.arrow.php");

				     	$PAGEB=1;

				    	include("blog.billets.right.arrow.php");

				     echo "</table>"; 
			 }


?>