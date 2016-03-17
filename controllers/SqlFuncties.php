<?php
	function CountSQL($link, $sql)
	{
		$result = mysqli_query($link, $sql);
		// $count = mysqli_num_rows($result);
		// return $count;
	}
?>