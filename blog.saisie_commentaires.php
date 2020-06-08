	<!-- 
            ====================================================
	         Affichage de la fenêtre de saisie des commentaires
            ====================================================
	 -->

		<H3 class=news style="background-color:blue">Commentaires </H3>

		<form action="blog.commentaires.php" method="post" >
	   	
		   	<textarea class=areasaisie name="commentaire" rows="6"></textarea> <BR>

			<label style="margin-left:25%" for="auteur">Auteur</label> <br>

			<!--input class="auteur" style="margin-left:470px" type="text" name="auteur" id="auteur" maxlength="20" /><BR-->
			<input style="margin-left:25%" type="text" name="auteur" maxlength="20" /><BR>

			<?php echo "<input type=\"hidden\" name=\"billet\" value=\"" . $billet . "\"/>" ; ?>

			<input class="valider" style="margin-left:25%" type="submit" value="Valider"/>
			
			
		</form>

		

		<?php
			 
		
			 if ( $PAGES_CMT < $TOT_PAGES_CMT && $PAGES_CMT > 1)
			 {
				     echo "<table class=\"fleches\""; 

				     	$PAGEC=($PAGES_CMT - 1);
				    	include("blog.commentaires.left.arrow.php");

				     	$PAGEC=($PAGES_CMT + 1);
				    	include("blog.commentaires.right.arrow.php");

				     echo "</table>";
		     } 


		

			 if ($PAGES_CMT == $TOT_PAGES_CMT && $PAGES_CMT > 1) 
			 {
				     echo "<table class=\"fleches\""; 
				    
				     	$PAGEC=($PAGES_CMT - 1);
				    	include("blog.commentaires.left.arrow.php");

				     	$PAGEC=($PAGES_CMT);
				    	include("blog.commentaires.right.arrow.php");
				    
				     echo "</table>"; 
			 }	

		

			 if ( $PAGES_CMT == 1 && $TOT_PAGES_CMT > 1 )
			 {

				     echo "<table class=\"fleches\""; 

				    	$PAGEC=1;
				    	include("blog.commentaires.left.arrow.php");

				     	$PAGEC=($PAGES_CMT + 1);
				    	include("blog.commentaires.right.arrow.php");

				     echo "</table>"; 
	
			 }

		

			 if ( $TOT_PAGES_CMT < 2 )
			 {

				     echo "<table class=\"fleches\""; 

				     	$PAGEC=1;
				    	include("blog.commentaires.left.arrow.php");

				     	$PAGEC=1;

				    	include("blog.commentaires.right.arrow.php");

				     echo "</table>"; 
			 }
			
		?>

	</body>

