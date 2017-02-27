<!-- ***********************************************************************************
  Page Name  : Program 2 
  Author     : Adam Torres
  Your URL   : ocelot-aul.fiu/~atorr208
  Course     : CGS 4854 U01, MW, 5:00-6:15
  Program #  : Assignment #2
  Purpose    : This page displays check boxes, text boxes and other input elements 

  Due Date   : 09/26/2016 
  
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

  ************************************************************************************** -->

<html>
	
<head>
	<title>Torres, Adam, Program 2</title>
	
	<style type="text/css">
	
		table {
			width: 50%;
			margin-left: auto;
			margin-right: auto;
		}
		
		#title {
			text-align: center;
			background-color: lightgreen;
		}
		
		#content {
			background-color: lightblue;
			font-family: Arial;
			font-size: 24;
			padding-right: 10%;
			padding-left: 10%;
			padding-top: 20px;
			padding-bottom: 20px;
			
		}
		
		.textInput {
			float: left;
		}
		
		p {
			font-size: 26;
			font-family: "Times New Roman", "Arial";
			line-height: 40px;
			padding: 20px;
		}
		img {
			margin-left: auto;
			margin-right: auto;
			display: block;
		}
			
        nav {
			background-color: lightblue;
			width: 50%;
			margin-left: auto;
			margin-right: auto;
		}
        nav ul 
        {
            background: #fdff00; 
            background: linear-gradient(top, #fdff00 0%, #e2e314 100%);  
            background: -moz-linear-gradient(top, #fdff00 0%, #e2e314 100%); 
            background: -webkit-linear-gradient(top, #fdff00 0%,#e2e314 100%); 
            box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
            padding: 0 20px;
            border-radius: 10px;  
            list-style: none;
            position: relative;
            display: inline-table;
        }
            
        nav ul:after 
        {
                content: ""; clear: both; display: block;
		}
                
        nav ul li 
        {
                float: left;
        }
        
		nav ul li:hover 
        {
                background: #30e314; 
                background: linear-gradient(top, #30e314 0%, #27bd0f 40%);
                background: -moz-linear-gradient(top, #30e314 0%, #27bd0f 40%);
                background: -webkit-linear-gradient(top, #30e314 0%,#27bd0f 40%);
        }      
                
        nav ul li:hover a 
        {
                color: white; /*=white#ff00ff; /*#fff; */ /*menu name color */
        }
		
        nav ul li:hover > ul 
        {
            display: block;
        }     
		
        nav ul li a 
        {
                display: block; padding: 25px 40px;
                color: blue; /* main menu name #757575;*/ text-decoration: none;
		}     
                
        nav ul ul 
        {
                background: darkgreen; /*#5f6975;*/ border-radius: 0px; padding: 0; /*sub menues */
                position: absolute; top: 100%;
        }
        
		nav ul ul 
        {
            display: none;
        }
		
		nav ul ul li 
			{
			float: none; 
			border-top: 1px solid white; /*#6b727c; */ /*border top */
			border-bottom: 1px solid #575f6a; /*border down */
			position: relative;
		}
	
        nav ul ul li a 
        {
                padding: 10px 40px;
                color: #fff;
        }	     
                
        nav ul ul li a:hover 
        {
                background: blue; /* #4b545f; */ /*submenu background color*/
        }     
                
        nav ul ul ul 
        {
                position: absolute; left: 100%; top:0;
        }
		
	</style>

</head>
	
<body style="background-color: lightgrey;">
	
	
	<form action="Controller2.php" method="post">
	
	<table id="title" border=5 bordercolor="blue">
		<tr>
			<td>
				<font size="6" face="Arial">Shirts Incorporated</font>
				<br>
				<font size="4" face="Verdana">FIU Shirt Shop</font>
			</td>
		</tr>

	</table>
	
	<nav align="center">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="#">Program 1</a>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="news.html">News</a></li>
					<li><a href="projects.html">Projects</a></li>
					<li><a href="contact.html">Contact Me</a></li>
				</ul>
			</li>
			<li><a href="pgm2.php">Program 2</a>
			</li>
			<li><a href="includes/pgm3.php">Program 3</a>
			</li>
			<li><a href="includes/pgm4.php">Program 4</a>
			</li>
		</ul>
	</nav>
	
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
				<input type="reset" value="Clear" name="Clear">
			</td>
		</tr>
	</table>
	
	
	<nav align="center">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="#">Program 1</a>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="news.html">News</a></li>
					<li><a href="projects.html">Projects</a></li>
					<li><a href="contact.html">Contact Me</a></li>
				</ul>
			</li>
			<li><a href="pgm2.php">Program 2</a>
			</li>
			<li><a href="includes/pgm3.php">Program 3</a>
			</li>
			<li><a href="includes/pgm4.php">Program 4</a>
			</li>
		</ul>
	</nav>
	
	</form>
</body>
	
</html>