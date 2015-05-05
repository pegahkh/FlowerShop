<!doctype html>
<?php include ('function.php')?>
<?php include ('flower.php')  ?>

<html>
	<head>

	  <title>LilyOnline</title>
	  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
	  <meta content="utf-8" http-equiv="encoding" />
	  <link rel="stylesheet" type="text/css" href="css/flower1.css" />
	  <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
	  <script>tinymce.init({selector:'textarea'});</script>
	  
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

				<li><a href="order.php">Orders</a></li>

				<li><a href="#">Help</a></li>

				<li><a href="order.php">Orders</a></li>

					

				<li><a href="flowerLoginf.php">Login</a></li>
				
	            <li>
				    <form method="get" action="result.php" enctype="multipart/form-data" >
						 <input type="text" name="user_query"/>
						 <input type="submit" name="search" value="search"/>
				<li>
				    </form>
	  
			</ul>	
		<div align="center">
		<form name="formname" action="newitem.php" method="post">
			<table  id='table_admin'>
				<tbody>
				<tr>
					<td >category</td>
					<td ><select name="cate" >
					
					<option value="1">Birthday</option>
					<option value="2"/>wedding</option>
					<option value="3"/>occasion</option>
					<option value="4">I'm Sorry</option>
					<option value="5">congraduation</option>
					<option value="6">Thank You</option>
					<option value="7">Sympathy</option>
					<option value="8">Best Sells</option>
					</select>
					</td>
					
				  </tr>
				  <tr>
					<td width="116" height="50" align="left">Name</td>
					<td width="466"><input name="Name" type="text" id="Name" title="Name" maxlength="200" ></td>
					
				  </tr>
				  <tr>
					<td height="290">Description</td>
					<td><textarea name="Desc" cols="40" rows="15" id="textarea"></textarea></td>
				  </tr>
				  <tr>
					<td>Size</td>
					<td><input type="text" name="Size" id="textfield"></td>
				  </tr>
				  <tr>
					<td>Price</td>
					<td>
					  <input type="text" name="Price" id="textfield2">$</td>
				  </tr>
				  <tr>
					<td >Price_category</td>
					<td ><select name="P_cate" >
					<option value="1">$45-$55</option>
					<option value="2"/>$55-$65</option>
					<option value="3"/>$65-$85</option>
					<option value="4">$85-$100</option>
					</select>
					</td>
					
				  </tr>
				  <tr>
					<td>Image</td>
					<td width="80"><input type="file" name="image" id="fileField" ></td>
				  </tr>
				  <td>Key_Search</td>
					<td>
					  <input type="text" name="key" id="textfield2"></td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="submit" id="submit" value="Upload"></td>
				  </tr>
				</tbody>
		</form>
			</table>
	    </div>
		
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
		Copyright© Roses Only 2014. 
	    All rights reserved.
		</div>
	</body>
</html>
	