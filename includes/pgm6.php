<!-- ***********************************************************************************
  Page Name  : Program 6
  Author     : Adam Torres
  Your URL   : ocelot-aul.fiu/~atorr208
  Course     : CGS 4854 U01, MW, 5:00-6:15, WEB2
  Program #  : Assignment #6
  Purpose    : The main page of program 6

  Due Date   : 11/28/2016 
  
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

  ************************************************************************************** -->

<html>
	<head>
		<title>Torres, Adam, Program 5</title>
		<link rel="stylesheet" type="text/css" href="../css/main.css">
        
        <style rel="stylesheet" type="text/css">
            
            .tooltip
            {
                position: relative;
                display: inline-block;
            }
            
            .tooltip .tooltiptext
            {
                visibility: hidden;
                width: 120px;
                background-color: blue;
                color: white;
                text-align: center;
                border-radius: 6px;
                padding: 10px;
                position: absolute;
                z-index: 1;
                bottom: 125%;
                left: 50%;
                margin-left: -60px;
                opacity: 0;
                transition: opacity 0.8s;
            }
            
            .tooltip .tooltiptext .tooltip-left
            {
                top: -5px;
                bottom: auto;
                right: 128%;
            }
            
            .tooltip .tooltiptext::after 
            {
              content: "";
              position: absolute;
              top: 100%;
              left: 50%;
              margin-left: -5px;
              border-width: 5px;
              border-style: solid;
              border-color: red transparent transparent transparent; /*arrow*/
            }

            .tooltip:hover .tooltiptext 
            {
              visibility: visible;
              opacity: 1;
            }
            
        </style>
		
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
	
		<form action="Controller5.php" method="post">
	
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
			if (!isset($_POST['found'])){$found = "";}
			
		?>
		
        <?php
                if (!(strlen(trim($found)) > 0)){
                    $found = "";
                }
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
                    <div class="tooltip">
                        First Name
                        <span class="tooltiptext">Enter Your First Name<br><font color="red">NOTE: REQUIRED</font></span> 
                    </div>
					<br>
                    
                    <div class="tooltip">
                        Last Name
                        <span class="tooltiptext tooltip-left">Enter Your Last Name</span>
                    </div>
					<br>
                    
                    <div class="tooltip">
                        Address
                        <span class="tooltiptext tooltip-left">Enter Your Address</span>
                    </div>
					<br>
                    
                    <div class="tooltip">
                        Phone
                        <span class="tooltiptext tooltip-left">Enter Your Phone Number</span>
                    </div>
					<br>
				</td>
				<td class="textInput">
					<input type="text" placeholder="First Name" name="UserFirstName" size="32" maxlength="256" value=<?php echo $UserFirstName; ?> >
					<br>
					<input type="text" placeholder="Last Name" name="UserLastName" size="32" maxlength="256" value=<?php echo $UserLastName; ?>>
					<br>
					<input type="text" placeholder="Your City" name="UserCity" size="32" maxlength="256" value=<?php echo $UserCity; ?>>
					<br>
					<input type="text" placeholder="Your Phone Number" name="UserPhone" size="32" maxlength="256" value=<?php echo $UserPhone; ?>>
					<br>
				</td>
			</tr>
			
			<tr>
				<td class="tooltip">
					<br>
					Heard of us?
                    <span class="tooltiptext tooltip-left">Where did you find out about our store?</span>
				</td>
				<td>
					<br>
					<input type="checkbox" name="whereFound[]" value="Internet"   <?php if (strpos($WhereFound, "Internet")   !== false){echo checked;}?>> Internet &nbsp; &nbsp; 
					<input type="checkbox" name="whereFound[]" value="Friend"     <?php if (strpos($WhereFound, "Friend")     !== false){echo checked;}?>> Friend &nbsp; &nbsp; 
					<input type="checkbox" name="whereFound[]" value="Email"      <?php if (strpos($WhereFound, "Email")      !== false){echo checked;}?>> Email &nbsp; &nbsp; 
				</td>
			</tr>
			<tr>
				<td class="tooltip">
					<br>
					Shirt Size
                    <span class="tooltiptext tooltip-left">Select the shirt size you want</span>
				</td>
				<td>
					<br>
					<input type="radio" name="Size" value="Small" <?php if ($Size == "Small"){echo checked;}?>> Small &nbsp; &nbsp; 
					<input type="radio" name="Size" value="Medium" <?php if ($Size == "Medium"){echo checked;}?>> Medium &nbsp; &nbsp; 
					<input type="radio" name="Size" value="Large" <?php if ($Size == "Large"){echo checked;}?>> Large &nbsp; &nbsp; 
				</td>
			</tr>
			<tr>
				<td class="tooltip">
					<br>
					Shirt Color
                    <span class="tooltiptext tooltip-left">Select What Color Shirt You Want</span>
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
				<td class="tooltip">
					<br>
                    <br>
					Shirt Text
                    <span class="tooltiptext tooltip-left">Enter The Text You Want On Your Shirt</span>
				</td>
				<td>
					<br>
					<br>
					<textarea name="ShirtText" rows="3" cols="30" placeholder="Text You Want to Display On Your Shirt"><?php echo $ShirtText; ?></textarea>
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
                    <input type="submit" value="Help" name="Help">
                    <input type="submit" value="About" name="About">
                    <input type="submit" value="Contact Us" name="ContactUs">
                    <input type="submit" value="Leads" name="Leads">
                    <input type="hidden" name="found" value="<?php echo $found; ?>" >
				</td>
			</tr>
		</table>
		
		
		<?php include 'css_menu.php'; ?>
		
		</form>
	</body>
	
</html>