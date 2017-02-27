<!-- ***********************************************************************************
  Page Name  : Leads
  Author     : Adam Torres
  Your URL   : ocelot-aul.fiu/~atorr208
  Course     : CGS 4854 U01, MW, 5:00-6:15, WEB2
  Program #  : Assignment #5
  Purpose    : The Leads page for pgm5

  Due Date   : 11/16/2016  
  
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

  ************************************************************************************** -->

<html>

<head>
    <title>Torres, Adam, leads.php</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <form action="findContact.php" method="post">
	
    <table id="title" border=5 bordercolor="blue">
        <tr>
            <td>
                <font size="6" face="Arial">Shirts Incorporated</font>
                <br>
                <font size="4" face="Verdana">FIU Shirt Shop</font>
            </td>
        </tr>

    </table>
    
    <?php include 'css_menu.php'; ?>
    
    <table id="content">
        <tr>
            <td width=200px>
                Telephone
                <br>
                First Name
                <br>
                Last name
                <br>
            </td>
            <td class="textInput">
                <input type="text" name="Telephone" size="32" maxlength="256" value="<?php echo $Telephone;?>">
                <br>
                <input type="text" name="UserFirstName" size="32" maxlength="256" value="<?php echo $UserFirstName;?>">
                <br>
                <input type="text" name="UserLastName" size="32" maxlength="256" value="<?php echo $UserLastName;?>">
                <br>
            </td>
        </tr>
        <tr>
            <td>
                <br>
                Comments
            </td>
            <td>
                <br>
                <br>
                <textarea name="Comments" rows="3" cols="30"><?php echo $Comments;?></textarea>
            </td>
        </tr>
    </table>
    
    <table id="content">
        <tr>
            <td align="center">
                <?php echo $comments ?>
                <br>
                <br>
            </td>
        </tr>
        <tr>
            <td align="center">
                <input type="submit" value="First" name="First">
                <input type="submit" value="Next" name="Next">
                <input type="submit" value="Previous" name="Previous">
                <input type="submit" value="Last" name="Last">
                <input type="hidden" value="<?php echo $location;?>" name ="location">
            </td>
        </tr>
    </table>
    
    
    <?php include 'css_menu.php'; ?>
    
    </form>
</body>

</html>