<?php
	$array = GetEventArray();
	//echo "<pre>".print_r($array, true)."</pre>";
	
	
	$rows = count($array);
	$columns = count($array[0]);
	
	for($x = 0; $x < $rows; $x++)
	{
		echo "<a href='?pagina=agescan&id=".$array[$x][0]."'><div class='rijEvenement'>".$array[$x][1]." -> ".$array[$x][2]."</div></a>";
	}
?>