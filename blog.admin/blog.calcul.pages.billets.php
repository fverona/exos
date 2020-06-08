<?php

	include("blog.count.table.billets.php");

	$modulo=($NB_COMT[0] % 4);

	if ($modulo > 0)
	{
		$TOT_PAGES_BILL=(int)($NB_COMT[0]/4 +1);
	}
	else
	{
		$TOT_PAGES_BILL=(int)($NB_COMT[0]/4);
	}	


?>