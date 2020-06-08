<?php

	include("blog.count.tab.commentaires.php");

	$modulo=($NB_COMT[0] % 4);

	if ($modulo > 0)
	{
		$TOT_PAGES_CMT=(int)($NB_COMT[0]/4 +1);
	}
	else
	{
		$TOT_PAGES_CMT=(int)($NB_COMT[0]/4);
	}	


?>