<!-- ***********************************************************************************
  Page Name  : Find Contact
  Author     : Adam Torres
  Your URL   : ocelot-aul.fiu/~atorr208
  Course     : CGS 4854 U01, MW, 5:00-6:15, WEB2
  Program #  : Assignment #4
  Purpose    : Finding the contact for the Leads page

  Due Date   : 11/16/2016 
  
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

  ************************************************************************************** -->
  
<html>
<head>
<title>Torres, Adam, findContact.php</title>
</head>

<body>
<?php

    $location = $_POST['location'];
    $location = (int) $location;
    
    $connection = mysqli_connect("ocelot.aul.fiu.edu", "fall16_atorr208", "4709314", "fall16_atorr208");

    if ($_POST['First']) {
        $location = 0;
        
        $sql = "SELECT * FROM contacts ORDER BY TELEPHONE ASC LIMIT 1";
        
        if ($result=mysqli_query($connection, $sql)){
            $row = mysqli_fetch_array( $result );
            
            $Telephone = $row['Telephone'];
            $UserFirstName = $row['FirstName'];
            $UserLastName = $row['LastName'];
            $Comments = $row['Comments'];
        }
    }
    
    else if ($_POST['Next']){
        
        $sql = "SELECT * FROM contacts ORDER BY TELEPHONE ASC";
        
        if ($results=mysqli_query($connection, $sql)){
            $rowcount = mysqli_num_rows($results);
            
            if ($location < $rowcount - 1){
                $location++;
            }
            
            mysqli_data_seek($results, $location);
            $row = mysqli_fetch_assoc($results);
            
            $Telephone = $row['Telephone'];
            $UserFirstName = $row['FirstName'];
            $UserLastName = $row['LastName'];
            $Comments = $row['Comments'];
            
        }
    }
    
    else if ($_POST['Previous']) {
        
        $sql = "SELECT * FROM contacts ORDER BY TELEPHONE ASC";
        
        if ($results=mysqli_query($connection, $sql)){
            if ($location > 0){
                $location--;
            }
            
            mysqli_data_seek($results, $location);
            $row=mysqli_fetch_assoc($results);
            
            $Telephone = $row['Telephone'];
            $UserFirstName = $row['FirstName'];
            $UserLastName = $row['LastName'];
            $Comments = $row['Comments'];
            
        }
        
    }
    
    else if ($_POST['Last']){
        
        $sql = "SELECT * FROM contacts ORDER BY TELEPHONE ASC";
        
        if ($results=mysqli_query($connection, $sql)){
            
            $rowcount = mysqli_num_rows($results);
            $location = $rowcount - 1;
            
            mysqli_data_seek($results, $location);
            $row=mysqli_fetch_assoc($results);
            
            $Telephone = $row['Telephone'];
            $UserFirstName = $row['FirstName'];
            $UserLastName = $row['LastName'];
            $Comments = $row['Comments'];
            
        }
        
    }
    
    include 'leads.php';
        
    
?>

</body>

</html>
