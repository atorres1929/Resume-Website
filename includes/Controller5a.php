<!-- ***********************************************************************************
  Page Name  : Controller 5
  Author     : Adam Torres
  Your URL   : ocelot-aul.fiu/~atorr208
  Course     : CGS 4854 U01, MW, 5:00-6:15, WEB2
  Program #  : Assignment #5
  Purpose    : The Controller logic for Leads and Contact Us for pgm5

  Due Date   : 11/16/2016  
  
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

  ************************************************************************************** -->
  
<html>

<head>
    <title>Torres, Adam, Controller5a.php</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>

<body>
<?php
    $connection = mysqli_connect("ocelot.aul.fiu.edu", "fall16_atorr208", "4709314", "fall16_atorr208");

    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else{
        $dbName = "fall16_atorr208";
        $db_selected = mysqli_select_db( $connection, $dbName );
        
        if (!$db_selected){
            die ($dbName . " does not exist, can't use it " . mysqli_errno());
        }
        else{
            $tableName = "contacts";
            
            $query = mysqli_query( $connection, "SELECT * FROM $tableName");
            
            if (!$query){
                echo "The $tableName table does not exist<br>";
                
                echo "Creating table: $tableName<br>";
                
                $sql = "CREATE TABLE $tableName (
                        Telephone VARCHAR(30) NOT NULL,
                        PRIMARY KEY (Telephone),
                        FirstName VARCHAR(30),
                        LastName VARCHAR(30),
                        Comments VARCHAR(200)
                        )";
                
                $result = mysqli_query( $connection, $sql);
                
                if ($result){
                    echo "table $tableName created <br>";
                }
                else{
                    die ("Can't create $tableName" . mysqli_errorno());
                }		
            }
        }		
    }
    $Telephone = $_POST[Telephone];
    $UserFirstName = $_POST[UserFirstName];
    $UserLastName = $_POST[UserLastName];   
    $Comments = $_POST[Comments];

    if ( $_POST['Save'] )
    { 
        include 'saveContact.php';
        include 'contact.php';
    }
    else if ( $_POST['Clear'] )
    {
        include 'clear.php';
        include 'contact.php';
    }
    
    else{
        echo "You pressed an unknown button!";
    }

    mysqli_close($connection);
?>
</body>

</html>