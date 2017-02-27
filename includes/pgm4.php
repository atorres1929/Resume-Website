<!-- ***********************************************************************************
  Page Name  : Program 4 
  Author     : Adam Torres
  Your URL   : ocelot-aul.fiu/~atorr208
  Course     : CGS 4854 U01, MW, 5:00-6:15, WEB2
  Program #  : Assignment #4
  Purpose    : The main page of program 4

  Due Date   : 10/31/2016 
  
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

  ************************************************************************************** -->

<html>
	<head>
		<title>Torres, Adam, Program 4</title>
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		
		<script>
			function currentTime(){
				
				var today = new Date();
				var hour = today.getHours();
				var minutes = today.getMinutes();
				var seconds = today.getSeconds();
				
				minutes = checkTime(minutes);
				seconds = checkTime(seconds);
				
				document.getElementById('txt').innerHTML = "Current Time : "+hour+":"+minutes+":"+seconds;
				
				var t = setTimeout(function(){currentTime()}, 500);
			}
			
			function checkTime(i){
			
				if (i < 10) {
					i = "0" + i;
				}
				
				return i;
			}
		</script>
	</head>
	
	<body onload="currentTime()">
	
		<form action="Controller4.php" method="post">
	
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
		
		<?php
			if (!isset($_POST['UserFirstName'])){$UserFirstName = "";}
			if (!isset($_POST['UserLastName'])){$UserLastName = "";}
			if (!isset($_POST['UserCity'])){$UserCity = "";}
			if (!isset($_POST['UserPhone'])){$UserPhone = "";}
			if (!isset($_POST['WhereFound'])){$WhereFound = "";}
			if (!isset($_POST['Size'])){$Size = "";}
			if (!isset($_POST['DropDown'])){$DropDown = "";}
			if (!isset($_POST['ShirtText'])){$ShirtText = "";}
			if (!isset($_POST['comments'])){$comments = "";}

			
		?>

		
		<table id="content">
			
			<tr>
				<td width="50%" style="font-size: 15;text-align: left;" >
					<script>
						loggedInTime();
						var temp1;
						
						function loggedInTime( temp ){
							var time = new Date();
							var temp2 = "Login at: " + time;
							temp1 = temp2;
							document.write( temp2 );
						}
						currentTime();
					</script>
				</td>
				<td id="txt" style="font-size: 15;text-align: right;">
				</td>
			</tr>
			
		</table>
		
		<table id="content">
			<tr>
				<td width=200px>
					First Name
					<br>
					Last Name
					<br>
					Address
					<br>
					Phone
					<br>
				</td>
				<td class="textInput">
					<input type="text" name="UserFirstName" size="32" maxlength="256" value=<?php echo $UserFirstName; ?>>
					<br>
					<input type="text" name="UserLastName" size="32" maxlength="256" value=<?php echo $UserLastName; ?>>
					<br>
					<input type="text" name="UserCity" size="32" maxlength="256" value=<?php echo $UserCity; ?>>
					<br>
					<input type="text" name="UserPhone" size="32" maxlength="256" value=<?php echo $UserPhone; ?>>
					<br>
				</td>
			</tr>
			
			<tr>
				<td>
					<br>
					Heard of us?
				</td>
				<td>
					<br>
					<input type="checkbox" name="WhereFound[]" value="Internet" <?php if (strpos($WhereFound, "Internet") !== false){echo checked;}?>> Internet &nbsp; &nbsp; 
					<input type="checkbox" name="WhereFound[]" value="Friend" <?php if (strpos($WhereFound, "Friend") !== false){echo checked;}?>> Friend &nbsp; &nbsp; 
					<input type="checkbox" name="WhereFound[]" value="Email" <?php if (strpos($WhereFound, "Email") !== false){echo checked;}?>> Email &nbsp; &nbsp; 
				</td>
			</tr>
			<tr>
				<td>
					<br>
					Shirt Size
				</td>
				<td>
					<br>
					<input type="radio" name="Size" value="Small" <?php if ($Size == "Small"){echo checked;}?>> Small &nbsp; &nbsp; 
					<input type="radio" name="Size" value="Medium" <?php if ($Size == "Medium"){echo checked;}?>> Medium &nbsp; &nbsp; 
					<input type="radio" name="Size" value="Large" <?php if ($Size == "Large"){echo checked;}?>> Large &nbsp; &nbsp; 
				</td>
			</tr>
			<tr>
				<td>
					<br>
					Shirt Color
					<br>
				</td>
				<td>
					<br>
					<select name="dropDown" size="1">
						<option <?php if (!isset($DropDown)){echo selected;}?>> Choose a Color! </option>
						<option <?php if ($DropDown == "Yellow"){echo selected;}?>> Yellow </option>
						<option <?php if ($DropDown == "Blue"){echo selected;}?>> Blue </option>
						<option <?php if ($DropDown == "Grey"){echo selected;}?>> Grey </option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<br>
					Shirt Text
				</td>
				<td>
					<br>
					<br>
					<textarea name="ShirtText" rows="3" cols="30"><?php echo $ShirtText; ?></textarea>
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
					<input type="submit" value="Find" name="Find">
					<input type="submit" value="Save" name="Save">
					<input type="submit" value="Modify" name="Modify">
					<input type="submit" value="Delete" name="Delete">
					<input type="submit" value="Clear" name="Clear">
				</td>
			</tr>
		</table>
		
		
		<?php include 'css_menu.php'; ?>
		
		</form>
	</body>
	
</html>