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
	
	//geeft aantal max toegangers
	function MaxFeestgangers($val)
	{
		global $link;
		
		if ($result=mysqli_query($link, "SELECT MaxAanwezigen FROM evenement WHERE IDEvenement=".$val))
		{
			$rowcount=mysqli_fetch_array($result);
			return $rowcount[0];
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
	
	//tellen hoeveel evenementen er met de gegeven naam bestaan
	function countAantalEvenementenMetDezelfdeNaam($val)
	{
		global $link;
		
		if ($result=mysqli_query($link, "SELECT * FROM evenement WHERE Naam='".$val."'"))
		{
			$rowcount = mysqli_num_rows($result);
			return $rowcount;
		}
	}
	
	//nieuw evenement met de gegeven waarden toevoegen
	function InsertNewEvenement($naam, $organisator, $minLeeftijd, $maxAanwezigen)
	{
		global $link;
			
		$result=mysqli_query($link,"INSERT INTO evenement VALUES ('','$naam','$organisator',$minLeeftijd,$maxAanwezigen);");
	}
	
	//zoekt de id van een evenement van een gegeven naam
	function GetEventIdByName($val)
	{
		global $link;
		
		if ($result=mysqli_query($link,"SELECT IDEvenement FROM evenement WHERE Naam ='".$val."'"))
		{
			$array = mysqli_fetch_assoc($result);
			return $array;
		}
	}
?>