<?php
	//count function
	function CountSQL($sql)
	{
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);
		return $count;
	}
?>