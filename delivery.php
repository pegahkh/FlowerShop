<?php 
        $server="mysql.metropolia.fi";
        $login="pegahk";
        $pass="3392796255";
        $database="pegahk";
		
		$con=mysqli_connect($server,$login,$pass,$database);
		if(mysqli_connect_errno()){
		echo "Failed connect to MYSQL".mysqli_connect_error();
		}
		
		if(isset($_POST['submit'])){
		$name=mysqli_real_escape_string($con,$_REQUEST['Name']);
        $lastName=mysqli_real_escape_string($con,$_POST['LastName']);
		$email=mysqli_real_escape_string($con,$_POST['Email']);
		$address=mysqli_real_escape_string($con,$_POST['Address']);
		$phone=mysqli_real_escape_string($con,$_POST['Phone']);
		
		
		
		$sql="INSERT INTO `costumer`(`Name`,`Lname`,`Email`,`Address`,`Phone`) 
		VALUES('$name','$lastName','$email','$address','$phone')";
		
		$insert_user = mysqli_query($con, $sql);
		if($sql){

         echo"<script>alert('The flower will deliver to you')</script>";
         echo"<script>window.open('index1.php', '_self')</script>";
		}
		}

?>