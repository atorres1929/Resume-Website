<!-- ***********************************************************************************
  Page Name  : Program 2 
  Author     : Adam Torres
  Your URL   : ocelot-aul.fiu/~atorr208
  Course     : CGS 4854 U01, MW, 5:00-6:15
  Program #  : Assignment #2
  Purpose    : This page displays whatever button is pressed in pgm2.php

  Due Date   : 09/26/2016 
  
  Certification: 
  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ your signature }..........

  ************************************************************************************** -->

<html>
	<head>
		<title>Torres, Adam, Controller2.php</title>
		
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
			padding: 20px;
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
	
	<body>
		
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
		</ul>
	</nav>
		
		<?php
			if (isset($_POST['Find'])){
				echo "a submit buttons was pressed (Find)";
			}
			else if (isset($_POST['Save'])){
				echo "a submit buttons was pressed (Save)";
			}
			else if (isset($_POST['Modify'])){
				echo "a submit buttons was pressed (Modify)";
			}
			else if (isset($_POST['Delete'])){
				echo "a submit buttons was pressed (Delete)";
			}
			else if (isset($_POST['Clear'])){
				echo "a submit buttons was pressed (Clear)";
			}
		?>
	</body>
	
</html>