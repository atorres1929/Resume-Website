<!-- ***********************************************************************************
  Page Name  : Save Contact
  Author     : Adam Torres
  Your URL   : ocelot-aul.fiu/~atorr208
  Course     : CGS 4854 U01, MW, 5:00-6:15, WEB2
  Program #  : Assignment #5
  Purpose    : The logic for saving the contact for Contact.php

  Due Date   : 11/16/2016  
  
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

  ************************************************************************************** -->
  
  
<html>

<head>
    <title>Torres, Adam, saveContact.php</title>
</head>

<body>
<?php
	$Telephone = trim($Telephone);
	
	if (strlen($Telephone) > 0){
		
		$sql = "INSERT INTO $tableName (
				Telephone,
				FirstName,
				LastName,
                Comments
				)
				VALUES(
				'$Telephone',
				'$UserFirstName',
				'$UserLastName',
                '$Comments')";

		if (mysqli_query($connection, $sql)){
			
			$comments = "<span style=\"color: blue;\">CONTACT $Telephone ADDED</spawn><br\>";
		}
		else{
			$comments = "<span style=\"color: red;\">CONTACT $Telephone ALREADY EXISTS</span><br\>";
		}
	}
	else{
		$comments ="<span style=\"color: red;\">CONTACT NOT ADDED<BR>Telephone CAN NOT BE EMPTY</span><br\>";
	}
?>


</body>

</html>