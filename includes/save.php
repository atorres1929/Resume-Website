<!-- ***********************************************************************************
  Page Name  : save.php 
  Author     : Adam Torres
  Your URL   : ocelot-aul.fiu/~atorr208
  Course     : CGS 4854 U01, MW, 5:00-6:15, WEB2
  Program #  : Assignment #4
  Purpose    : The save logic of pgm4

  Due Date   : 10/31/2016 
  
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

  ************************************************************************************** -->


<html>
<head>
<title>Torres, Adam, save.php</title>
</head>
<body>
<?php
	$FirstName = trim($UserFirstName);
	
	if (strlen($FirstName) > 0){
		
		$sql = "INSERT INTO $tableName (
				FirstName,
				LastName,
				City,
				Phone,
				WhereFound,
				Size,
				Color,
				Text
				)
				VALUES(
				'$UserFirstName',
				'$UserLastName',
				'$UserCity',
				'$UserPhone',
				'$WhereFound',
				'$Size',
				'$DropDown',
				'$ShirtText')";

		if (mysqli_query($connection, $sql)){
			
			$comments = "<span style=\"color: blue;\">RECORD $UserFirstName ADDED</spawn><br\>";
		}
		else{
			$comments = "<span style=\"color: red;\">RECORD $UserFirstName ALREADY EXISTS</span><br\>";
		}
	}
	else{
		$comments ="<span style=\"color: red;\">RECORD NOT ADDED<BR>FirstName CAN NOT BE EMPTY</span><br\>";
	}
?>
</body>

</html>