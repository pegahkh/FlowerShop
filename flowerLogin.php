<!DOCTYPE html>

<html>
    
   
	<body>

		<?php
		$server="mysql.metropolia.fi";
        $login="pegahk";
        $pass="3392796255";
        $database="pegahk";
		
		$con=mysqli_connect($server,$login,$pass,$database);
		if(mysqli_connect_errno()){
		echo "Failed connect to MYSQL".mysqli_connect_error();
		}
		
		//ESCAPE special Chatarctor for Scurity purpose
		if(isset($_POST["submit"])){
		$Name=mysqli_real_escape_string($con,$_POST['Uname']);
		$email=mysqli_real_escape_string($con,$_POST['email']);
		
		if(!$_POST['Uname'] || !$_POST['email'])
		{
		echo("<script>
		   window.alert('YOU did not complete all requirements')
		   window.location.href='flowerLoginf.php'
		   </script>");
		
		exit();
		}
		
		$select_db=mysqli_select_db($con,'pegahk') or die(" NONOOOOOO");
		$sql= "SELECT *FROM `adminlogin` WHERE `UserName`='$Name' AND 'password'='$email' ";
		$result= mysqli_query($con,$sql) ;
		$count= mysqli_num_rows($result);
		
		if($count>0){
		
         header("location:admin.php");
			
			}
       
			else{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Wrong username password combination.Please re-enter.')
			window.location.href='flowerLogin.html'
			</SCRIPT>");
			exit();
			}
			}
			
		
		
		
		
		?>

	</body>
   </html>
		
		
		
		
		