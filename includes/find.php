<!-- ***********************************************************************************
  Page Name  : find.php
  Author     : Adam Torres
  Your URL   : ocelot-aul.fiu/~atorr208
  Course     : CGS 4854 U01, MW, 5:00-6:15, WEB2
  Program #  : Assignment #4
  Purpose    : The find logic of pgm4

  Due Date   : 10/31/2016 
  
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

  ************************************************************************************** -->

<html>
<head>
<title>Torres, Adam, find.php</title>
</head>

<body>
<?php

	$sql = "SELECT * FROM orders where FirstName = '$UserFirstName'";
	
	if ($result=mysqli_query($connection, $sql)){

		$rowcount = mysqli_num_rows($result);
		
		while ($row = mysqli_fetch_array($result)){
			$UserFirstName = $row['FirstName'];
			$UserLastName = $row['LastName'];
			$UserCity = $row['City'];
			$UserPhone = $row['Phone'];
			$WhereFound = $row['WhereFound'];
			$Size = $row['Size'];
			$DropDown = $row['Color'];
			$ShirtText = $row['Text'];
		}
		
		$UserFirstName = trim($UserFirstName);
		if ($rowcount){
			$found = $UserFirstName;
			$comments = "<span style=\"color: blue;\">RECORD $found FOUND</span><br>";
		}
		else if (strlen($UserFirstName) == 0){
		
			$comments = "<span style=\"color: red;\">First Name CANNOT BE EMPTY</span><br>";
			
			$UserFirstName = "";
			$UserLastName = "";
			$UserCity = "";
			$UserPhone = "";
			$WhereFound = "";
			$Size = "";
			$DropDown = "";
			$ShirtText = "";
		
		}else {
            $comments = "<span style=\"color: red;\">RECORD $UserFirstName CANNOT BE FOUND</span><br>";
            
            $UserFirstName = "";
			$UserLastName = "";
			$UserCity = "";
			$UserPhone = "";
			$WhereFound = "";
			$Size = "";
			$DropDown = "";
			$ShirtText = "";
        }
	}

?>
</body>

</html>
