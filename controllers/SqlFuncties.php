<?php
	//telt het aantal evenementen
	function CountEvents()
	{
		global $link;
		
		if ($result=mysqli_query($link, "SELECT * FROM evenement"))
		{
			$rowcount=mysqli_num_rows($result);
			return $rowcount;
		}
	}
	
	//telt het aantal feestgangers algemeen
	function CountFeestgangers()
	{
		global $link;
		
		if ($result=mysqli_query($link, "SELECT * FROM feestgangers"))
		{
			$rowcount=mysqli_num_rows($result);
			return $rowcount;
		}
	}
	
	//telt het aantal feestgangers op een gegeven evenement
	function CountFeestgangersOpEvenement($val)
	{
		global $link;
		
		if ($result=mysqli_query($link, "SELECT * FROM feestgangersopevenement WHERE IDEvenement=".$val))
		{
			$rowcount=mysqli_num_rows($result);
			return $rowcount;
		}
	}
	
	//geeft een array terug met informatie over een feestganger van gegeven id
	function GetfeestgangerById($val)
	{
		global $link;
		
		if ($result=mysqli_query($link,"SELECT * FROM feestgangers WHERE IDFeestgangers =".$val))
		{
			$array = mysqli_fetch_assoc($result);
			return $array;
		}
	}
	
	//geeft een array terug met informatie over een feestganger van gegeven RRNR
	function GetfeestgangerByRRNR($val)
	{
		global $link;
		
		if ($result=mysqli_query($link,"SELECT * FROM feestgangers WHERE RRNR =".$val))
		{
			$array = mysqli_fetch_assoc($result);
			return $array;
		}
	}
?>