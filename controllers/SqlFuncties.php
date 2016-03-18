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
	
	//geeft een array terug van alle bestaande evenementen
	function GetEventArray()
	{
		global $link;
		
		$array;
		$teller = 0;
		
		$result = mysqli_query($link, "SELECT * FROM evenement");

		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{
				$array[$teller][0] = $row["IDEvenement"];
				$array[$teller][1] = $row["Naam"];
				$array[$teller][2] = $row["Organisator"];
				$array[$teller][3] = $row["MinLeeftijd"];
				$array[$teller][4] = $row["MaxAanwezigen"];
				$teller++;
			}
		}	
		return $array;
	}
?>