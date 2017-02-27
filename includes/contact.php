<!-- ***********************************************************************************
  Page Name  : About
  Author     : Adam Torres
  Your URL   : ocelot-aul.fiu/~atorr208
  Course     : CGS 4854 U01, MW, 5:00-6:15, WEB2
  Program #  : Assignment #5
  Purpose    : The About page for pgm5

  Due Date   : 11/16/2016  
  
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

  ************************************************************************************** -->

<html>

<head>
    <title>Torres, Adam, contact.php</title>
</head>
<body>
    <form action="Controller5a.php" method="post">
	
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
                <input type="text" name="Telephone" size="32" maxlength="256" value=<?php echo $Telephone;?>>
                <br>
                <input type="text" name="UserFirstName" size="32" maxlength="256" value=<?php echo $UserFirstName;?>>
                <br>
                <input type="text" name="UserLastName" size="32" maxlength="256" value=<?php echo $UserLastName;?>>
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
                <input type="submit" value="Save" name="Save">
                <input type="submit" value="Clear" name="Clear">
            </td>
        </tr>
    </table>
    
    
    <?php include 'css_menu.php'; ?>
    
    </form>
</body>

</html>