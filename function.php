
<?php

$server="mysql.metropolia.fi";
$login="pegahk";
$pass="3392796255";
$database="pegahk";

$con=mysqli_connect($server,$login,$pass,$database);
if(mysqli_connect_errno()){
	echo "Failed connect to MYSQL".mysqli_connect_error();
}

//function for getting the categories
function getcat(){
	
	global $con;
	$get_cat="SELECT *from categ";
	$run_cat=mysqli_query($con,$get_cat);
	while($row_cat=mysqli_fetch_array($run_cat)){
		$cat_id=$row_cat['ID'];
		$cat_title=$row_cat['cat'];
		echo"<li><a href='index1.php?cat=$cat_id'>$cat_title</a></li>
			";
		
	}
}
function getprice(){
	
	global $con;
	$get_price="SELECT *from pfinal";
	$run_price=mysqli_query($con,$get_price);
	while($row_cat=mysqli_fetch_array($run_price)){
		$cat_id=$row_cat['ID'];
		$price=$row_cat['price'];
		echo"<li><a href='index1.php?price=$cat_id'>$price</a></li>
			";
	}
}

//if select category on sidebar only item with the specific cat_id will show up
function getpro_cat(){
	if(isset($_GET['cat'])){
		$cat_id=$_GET['cat'];
		global $con;
		$get_cat_pro="SELECT * from items where item_cat=$cat_id  ";
		$run_cat_pro=mysqli_query($con,$get_cat_pro);
		while($row_cat_pro= mysqli_fetch_array($run_cat_pro)){
			$pro_id=$row_cat_pro["ID"];
			$pro_item=$row_cat_pro["item_cat"];
			$pro_priceId=$row_cat_pro["price_id"];
			$pro_image=$row_cat_pro["image"];
			$pro_Name= $row_cat_pro["Name"];
			$pro_Price=$row_cat_pro["Price"];
			$pro_Size=$row_cat_pro["Size"];
			$pro_Desc=$row_cat_pro["Description"];
			
			echo"
		<div id='single_pro'>
		<a href='detail.php?ID=$pro_id'><img src='pic/$pro_image' alt='flowers' width='200' height='200'/></a>
		<h3>$pro_Name</h3>
		<p>$ $pro_Price</p>
		<a href='index1.php'>Add to Cart</a>
		</div>
		";
			
		}
	}
}

//if select category based on price only item with the specific price_id will show up
function getprice_Cat(){
	    if(isset($_GET['price'])){
		$priceCat_id=$_GET['price'];
		global $con;
		$get_price_pro="SELECT * from items where price_id=$priceCat_id ";
		$run_price_pro=mysqli_query($con,$get_price_pro);
		while($row_price_pro= mysqli_fetch_array($run_price_pro)){
			$pro_id=$row_price_pro["ID"];
			$pro_item=$row_price_pro["item_cat"];
			$pro_priceId=$row_price_pro["price_id"];
			$pro_image=$row_price_pro["image"];
			$pro_Name= $row_price_pro["Name"];
			$pro_Price=$row_price_pro["Price"];
			$pro_Size=$row_price_pro["Size"];
			$pro_Desc=$row_price_pro["Description"];
			
			echo"
		<div id='single_pro'>
		<a href='detail.php?ID=$pro_id'><img src='pic/$pro_image' alt='flowers' width='200' height='200'/></a>
		<h3>$pro_Name</h3>
		<p>$ $pro_Price</p>
		<a href='index1.php'>Add to Cart</a>
		</div>
		";
			
		}
	}
}



//Function for search field
function result(){
		if(isset($_GET['search'])){
			$search_query=$_GET['user_query'];
			global $con;					 
			$get_pro="SELECT * from items where Search_key like '%$search_query%' ";
			$run_pro=mysqli_query($con,$get_pro);
			while($row_pro= mysqli_fetch_array($run_pro)){
				$pro_id=$row_pro["ID"];
				$pro_item=$row_pro["item_cat"];
				$pro_image=$row_pro["image"];
				$pro_Name= $row_pro["Name"];
				$pro_Price=$row_pro["Price"];
				$pro_Size=$row_pro["Size"];
				$pro_Desc=$row_pro["Description"];
				
				echo"
				<div id='single_pro'>
				<a href='detail.php?ID=$pro_id'><img src='pic/$pro_image' alt='flowerDetail' width='200' height='200'/></a>
				<h3>$pro_Name</h3>
				<p>$ $pro_Price</p>
				<a href='index1.php'>Add to Cart</a>
				</div>
					
				";
				
			}
		}
	}
	?>	 
