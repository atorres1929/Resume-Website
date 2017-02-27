<!-- ***********************************************************************************
  Page Name  : Program 3 
  Author     : Adam Torres
  Your URL   : ocelot-aul.fiu/~atorr208
  Course     : CGS 4854 U01, MW, 5:00-6:15, WEB2
  Program #  : Assignment #3
  Purpose    : The main page of program 3

  Due Date   : 10/24/2016 
  
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

  ************************************************************************************** -->

<html>
	<head>
		<title>Torres, Adam, Program 3</title>
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
	
		<form action="Controller3.php" method="post">
	
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
					<input type="text" name="UserFirstName" size="32" maxlength="256">
					<br>
					<input type="text" name="UserLastName" size="32" maxlength="256">
					<br>
					<input type="text" name="UserAddress" size="32" maxlength="256">
					<br>
					<input type="text" name="UserPhone" size="32" maxlength="256">
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
					<input type="checkbox" name="WhereFound" value="Internet"> Internet &nbsp; &nbsp; 
					<input type="checkbox" name="WhereFound" value="Friend"> Friend &nbsp; &nbsp; 
					<input type="checkbox" name="WhereFound" value="Email"> Email &nbsp; &nbsp; 
				</td>
			</tr>
			<tr>
				<td>
					<br>
					Shirt Size
				</td>
				<td>
					<br>
					<input type="radio" name="Size" value="Small"> Small &nbsp; &nbsp; 
					<input type="radio" name="Size" value="Small"> Medium &nbsp; &nbsp; 
					<input type="radio" name="Size" value="Small"> Large &nbsp; &nbsp; 
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
						<option> Yellow </option>
						<option> Blue </option>
						<option> Grey </option>
						<option selected> Choose a Color! </option>
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
					<textarea name="ShirtText" rows="3" cols="30"></textarea>
				</td>
			</tr>
		</table>
		
		<table id="content">
			<tr>
				<td align="center">
					$message
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