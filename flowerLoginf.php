<!doctype html>
<?php include ('function.php')?>

<html>
	<head>

	  <title>LilyOnline</title>
	  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
	  <meta content="utf-8" http-equiv="encoding" />
	  <link rel="stylesheet" type="text/css" href="css/flower1.css" />
	 
	  
	</head>

	<body>
		<!-- headerlogo -->
		<div id='logo'>
		<img src="calla1.jpg" width='250'height='120' /></div>
		<!-- header -->
	  
	  <div><h2>LiLy Flower Shop</h2> 
	  </div>
	  
	  <span id="phoneHeader">
	  <p><img src="tel.jpg" align="middle" width='30'height='30' />
	  For phone order, or help choosing flowers call: <b>1800 5024 22<b>
	 </p>
	 </span>
	  
     <!-- main menue -->
		  <ul id="tabs">
				<li><a href="index1.php">Home</a></li>

				<li><a href="#">Contact</a></li>

				<li><a href="#">Help</a></li>

				<li><a href="#">About us</a></li>

					

				<li><a href="flowerLoginf.php">Login</a></li>
				
	            <li>
				    <form method="get" action="result.php" enctype="multipart/form-data">
						 <input type="text" name="user_query"/>
						 <input type="submit" name="search" value="search"/>
				<li>
				    </form>
	  
			</ul>	
		
		
		<!-- make a side bar -->
		<div id="sidebar">
					<div id="sidebar_title">Categories</div>
					
					<ul id="cats">
					   <?php 
					   
					   getcat();
					   ?> 
					   
					   </ul>	
					  <div id="sidebar_title1">Price</div>
					  <ul id="cats">
					  <?php 
					   getprice();
					   ?> 
					</ul>	
				</div>
		<!-- make a Footer -->
		<div id='footer1'>
		Copyright© Call Lili Only 2016. 
	    All rights reserved.
		</div>
			
			<div id="login">
			<h2>Sign-in</h2>
			<form action="flowerLogin.php" method="POST">
			<div>UserName:
			<input type="text" name="Uname" ></div></br>
			<div>Password:
			<input type="text" name="email" ></div></br>
			<input type="Submit" value="login" name="submit">
			<input type="reset" value="Cancel">
			
			</form>
			</div>
			
			
		
    </body>
</html>
	