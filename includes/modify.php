<!-- ***********************************************************************************
  Page Name  : Modify
  Author     : Adam Torres
  Your URL   : ocelot-aul.fiu/~atorr208
  Course     : CGS 4854 U01, MW, 5:00-6:15, WEB2
  Program #  : Assignment #5
  Purpose    : Modifys a record for program 5

  Due Date   : 11/16/2016  
  
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

  ************************************************************************************** -->
  
<html>
  
<head>
    <title>Torres, Adam, Modify.php</title>
</head>

<body>
    <?php
        
        $found = $_POST['found'];
        
        if ( (strlen(trim($found)) > 0 ) && ( $found == $UserFirstName) ){
            
            $query = "UPDATE $tableName SET
                        FirstName = '$UserFirstName',
                        LastName = '$UserLastName',
                        City = '$UserCity',
                        Phone = '$UserPhone',
                        WhereFound = '$WhereFound',
                        Size = '$Size',
                        Color = '$DropDown',
                        Text = '$ShirtText'
                        
                        WHERE FirstName = '$UserFirstName';";
                        
            $sql = mysqli_query($connection, $query);
            
            if ($sql){
                $comments ="<span style=\"color: blue;\">RECORD $found MODIFIED</span><br\>";
            }
            else{
                $comments ="<span style=\"color: red;\">PROBLEM UPDATING RECORD</span><br\>";
            }
                        
        }
        
    ?>
</body>