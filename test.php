<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
   			<?php echo "Exercice de REGEX"; ?>	

	        <!--   ===============================================
		           Affichage de la fenêtre de saisie 
	              ===============================================
	        -->

			<form action="test.php" method="post" >

			   	<textarea name="contenu" rows="10" cols="150">
				
					

			   	</textarea> 
			   	<p>
					<input class="valider" style="margin-left:3%"   type="submit" name="action" value="Valider"/>
				</p>
			</form>


		<?php 

		if (isset($_POST['action']) and $_POST['action'] == 'Valider' ) 
		{
			
			if (isset($_POST['contenu']))
			{	

				     $texte = htmlspecialchars($_POST['contenu']);

				     		//             &lt;     head       &gt;   dddd   &lt;  /      head      &gt;	   
			     $texte =  preg_replace('#(&lt;)([a-zA-Z0-9]+)(&gt;)([a-zA-Z0-9 _-]+)(&lt;/)([a-zA-Z0-9]+)(&gt;)#',
				      '<span style="color:red; font-weight:bold">&lt;$2&gt;<span style="color:green">$4</span>&lt;/$6&gt;</span>', $texte);



















				     //$texte =  preg_replace('#(&lt;)(/)?([a-zA-Z0-9]+)(&gt;)#sU', '<span style="color:blue">       &lt;$2   $3&gt;             </span>', $texte);
				     //$texte =  preg_replace('#(&lt;[a-zA-Z0-9]+&gt;)([a-zA-Z0-9 ]+)(&lt;/[a-zA-Z0-9]+&gt;)#', '<span style="color:green">$2</span>', $texte);

				    
				     // Création d'un lien clikable sur une adresse E-Mail
				     //$texte = preg_replace('#([a-z0-9_.-]+@[a-z0-9_.-]{2,}\.[a-z]{2,4})#', '<a href="mailto:$1">E-Mail:$0</a>',$texte);
				     

				     // s pour que le saut de ligne soit pris en compte par (.+)
				     // i Insensible à la casse
				     // U pour que s'il y pusieurs couples [b] ... [/b] elle soient bien prise en compte séparement. Ex. Ce texte est [b]important[/b], il faut me [b]comprendre[/b] ! 
				     
				     // Transfomation du text en gras si compris entre les balises [b] .. [/b]  ou   [B] ... [/B]
				     //$texte = preg_replace('#(\[b\])(.+)(\[/b\])#sUi', '<STRONG>$2</STRONG>', $texte);

				     // Transfomation du text en italique si compris entre les balises [i] .. [/i]  ou   [I] ... [/I]
				     //$texte = preg_replace('#(\[i\])(.+)(\[/i\])#sUi', '<em>$2</em>', $texte);
				     
				     // Coloriage des mots si dans les balise [color=red] .. [color=green] ....... [/color]
				     //$texte = preg_replace('#\[color=(green|red|yellow|purple|blue|olive)\](.+)\[/color\]#sUi', '<span style="color:$1">$2</span>', $texte);
				    
				     // souligné
				     //$texte = preg_replace('#\[u\](.+)\[/u\]#sUi', '<span style="text-decoration:underline">$1</span>', $texte);
				     
				     
				     // grep d'une chaine de caractère contenent une URL  

				     //$texte =  preg_replace('#(http)s?://www\.([a-zA-Z0-9/_-]+)\.([a-z]{2,3}|[a-z]{2,4})([a-zA-Z0-9_/-]){0,}(\.([a-z]{2,3}|[a-z]))?((\?[a-zA-Z0-9]+=[a-zA-Z0-9]+)((&amp;)[a-zA-Z0-9]+=[a-zA-Z0-9]+){0,254})?#', '<a href="$0">$0</a>', $texte);
						    
				     						  //&lt;  body   &gt;  yyyyy        &lt;/body&gt;		

				    // $texte = preg_replace('#(\[/n\])#sU', '</br>', $texte);

				     echo '<p style="background-color:black";color="white">' .$texte . "</p>";		


			}
		}
		
		?> 

	</body>