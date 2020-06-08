<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Réception de paramètres dans l'URL</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
  

	<?php
/*=============================================================================================================

    Test valeusr de l'URL du type: http://localhost/exos/CtrlDate.php?annee=2021&mois=4&jour=31
  
 ===============================================================================================================
*/


   	function Controle_si_entier_numerique($Clef, $Valeur_Clef)
   	{
   		
   		$Valeur_Clef_Sauve=$Valeur_Clef; 


		if (is_numeric($Valeur_Clef))
		{
			

			if ($Valeur_Clef != 0)
			{	
		   		$Valeur_Clef = ltrim($Valeur_Clef, "0");
		   		$Valeur_Clef = (int)($Valeur_Clef);
	   		}
	   		else
	   		{
	   			$Valeur_Clef=$Valeur_Clef_Sauve;
	   		}

	   		$Valeur_Clef = (int)($Valeur_Clef);

			$Valeur_Clef = filter_input(INPUT_GET, $Clef ,  FILTER_VALIDATE_INT);

			if (is_int($Valeur_Clef))
			{
				echo  $Valeur_Clef_Sauve . "  est bien une valeur numérique entière pour - " . $Clef . "<br>";
				return true;
			}
				else
			{
				echo $Valeur_Clef_Sauve ." N'est pas une valeur numérique entiere pour - " . $Clef . "<br>"; 
				return false;
			}
		}
	
		else
	
		{
			echo $Valeur_Clef_Sauve . " n'est pas une valeur numérique pour '" . $Clef . "<br>";
			return false;
		}
	}
	 

	function Controle_du_mois($Tab_Mois)
	{

		if (in_array($_GET['mois'], $Tab_Mois))
		{
   		 return true;
   		}
	}

	function Controle_du_jour($Mois, $Annee_Bis)
	{
		if ($Mois == 1 or $Mois == 3 or $Mois == 5 or $Mois == 7 or $Mois == 8 or $Mois == 10 or $Mois == 12)
		{

			if ($_GET['jour'] > 31)
			{
			 	return false;
			}
			else 
			{
			 	return true;
			}

		}

		elseif ($Mois == 2)
		{
	
			if ($Annee_Bis)
			{
				$max_jour=29;
			}
			else
			{	
				$max_jour=28;
			}	

			if ($_GET['jour'] > $max_jour)
			{
			 	return false;
			}
			else
			{ 	
			 	return true;
			}
		}

		else
		{
			if ($_GET['jour'] > 30)
			{
			 	return false;
			}
			else
			{
			 	return true;
			}


		}	

	}


//*==================================================================================================================================*
//*                                                                                                                                  *
//*==================================================================================================================================*


if (isset($_GET['annee']) AND isset($_GET['mois']) AND isset($_GET['jour']))
{

	if (Controle_si_entier_numerique( "annee" , $_GET['annee']) AND  Controle_si_entier_numerique( "mois"  , $_GET['mois' ]) AND Controle_si_entier_numerique( "jour"  , $_GET['jour' ])) 
	{
		echo "Les types de valeurs numériques pour la date sont corrects <br>";
		
		$Annee_Bis = $_GET['annee'] % 4;	

		if ($Annee_Bis < 1)
		{
			echo $_GET['annee'] . " Annee bisextile<br>";	
			$Annee_Bis=true;
		}
		else
		{
			$Annee_Bis=false;
		}

				
		$Tab_Mois = array ("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12");
		
		if (Controle_du_mois($Tab_Mois))
		{
			echo "Le contrôle du mois est OK <br>";

			$Lib_Mois['1']  = 'Janvier';
			$Lib_Mois['2']  = 'Février';
			$Lib_Mois['3']  = 'Mars';
			$Lib_Mois['4']  = 'Avril';
			$Lib_Mois['5']  = 'Mai';
			$Lib_Mois['6']  = 'Juin';
			$Lib_Mois['7']  = 'Juillet';
			$Lib_Mois['8']  = 'Aout';
			$Lib_Mois['9']  = 'Septemmbre';
			$Lib_Mois['10'] = 'Ocrobre';
			$Lib_Mois['11'] = 'Novembre';
			$Lib_Mois['12'] = 'Décembre';

			echo $_GET['mois'] . " est le mois de " . $Lib_Mois[ltrim($_GET['mois'], "0")] . "<br>";
		
			if (Controle_du_jour($_GET['mois'] , $Annee_Bis)) 	
			{
				echo $_GET['jour'] . " est un jour correct pour le mois de " . $Lib_Mois[ltrim($_GET['mois'], "0")] . " " . $_GET['annee'] . "<br>" ;
			}
			else
			{
				echo $_GET['jour'] . " n'est pas une valeur correcte pour le jour du mois de " . $Lib_Mois[ltrim($_GET['mois'], "0")] . " " .$_GET['annee'] . " <br>" ;
			}	


		}
		else
		{
			Echo "Erreur! Les valeurs valides pour le mois sont:";
			foreach($Tab_Mois as $Mois)
			{
			    echo " " . $Mois ; 
			}	
			echo "<br>";
			}
		}


	else
			
	{
		echo "Le contrôle de la date a détecté des erreurs! Seul des numériques entiers sont admis.<br>" ;
	}	

}
else
{
 	echo "Il faut renseigner les trois clés annee, mois et jours" ;
}
?>

   </body>
</html>

