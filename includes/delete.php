<!-- ***********************************************************************************
  Page Name  : delete.php
  Author     : Adam Torres
  Your URL   : ocelot-aul.fiu/~atorr208
  Course     : CGS 4854 U01, MW, 5:00-6:15, WEB2
  Program #  : Assignment #4
  Purpose    : The delete logic of pgm5

  Due Date   : 11/16/2016 
  
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

  ************************************************************************************** -->
  
<html>

<head>
    <title>Torres, Adam, delete.php</title>
</head>

<body>

<?php
    $record = "RECORD ".$UserFirstName." DELETED";
    
    $found = $_POST['found'];
    
    $sql = "DELETE FROM $tableName WHERE FirstName = '$UserFirstName';";
    
    $UserFirstName = trim($UserFirstName);
    
    if ( (strlen(trim($found)) > 0) && ($found == $UserFirstName) ){
        
        if (mysqli_query($connection, $sql)){
            $comments = "<span style=\"color: red;\">RECORD $found DELETED</span><br\>";
        }
        else{
            $comments = "Error deleting record: " . mysqli_errno($connection);
        }
    }
    else {
        $comments ="<span style=\"color: red;\">RECORD NOT DELETED<BR>First Name CAN NOT BE EMPTY</span><br\>";
    }
    
?>

</body>

</html>