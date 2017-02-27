<!-- ***********************************************************************************
  Page Name  : Controller 3 
  Author     : Adam Torres
  Your URL   : ocelot-aul.fiu/~atorr208
  Course     : CGS 4854 U01, MW, 5:00-6:15, WEB2
  Program #  : Assignment #3
  Purpose    : The controller which takes input from pgm3.php and displays it

  Due Date   : 10/24/2016  
  
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

  ************************************************************************************** -->

<html>
	<head>
		<title>Torres, Adam, Controller3.php</title>
		<link rel="stylesheet" type="text/css" href="../css/main.css">
	</head>
	
	<body>
		
		<?php include 'css_menu.php';?>
		
		<table id="content">
			<tr>
				<td>
					First Name
				</td>
				<td>
					<?php echo $_POST[UserFirstName];?>
				</td>
			</tr>
			<tr>
				<td>
					Last Name
				</td>
				<td>
					<?php echo $_POST[UserLastName];?>
				</td>
			</tr>
			<tr>
				<td>
					Address
				</td>
				<td>
					<?php echo $_POST[UserAddress];?>
				</td>
			</tr>
			<tr>
				<td>
					Phone
				</td>
				<td>
					<?php echo $_POST[UserPhone];?>
				</td>
			</tr>
			<tr>
				<td>
					Heard of Us?
				</td>
				<td>
					<?php echo $_POST[WhereFound];?>
				</td>
			</tr>
			<tr>
				<td>
					Shirt Size
				</td>
				<td>
					<?php echo $_POST[Size];?>
				</td>
			</tr>
			<tr>
				<td>
					Shirt Color
				</td>
				<td>
					<?php echo $_POST[dropDown];?>
				</td>
			</tr>
			<tr>
				<td>
					Shirt Text
				</td>
				<td>
					<?php echo $_POST[ShirtText];?>
				</td>
			</tr>
		</table>
		
		<table id="content" align="center">
			<tr>
				<td>
					<?php
						if ( $_POST['Find'] )
						   { 
							 echo "this is the controller3 page, the \"Find\" button was pressed";
						   }
						   else if ( $_POST['Save'] )
						   { 
							  echo "this is the controller3 page, the \"Save\" button was pressed";
						   }
						   else if ( $_POST['Modify'] )
						   {  
							  echo "this is the controller3 page, the \"Modify\" button was pressed";
						   }
						   else if ( $_POST['Delete'] )
						   { 
							  echo "this is the controller3 page, the \"Delete\" button was pressed";
						   }
						   else if ( $_POST['Clear'] )
						   {
							  echo "this is the controller3 page, the \"Clear\" button was pressed";
						   }
						   else
						   { 
							  echo "";   
						   }
					?>
				</td>
			</tr>
		</table>
	</body>
</html>