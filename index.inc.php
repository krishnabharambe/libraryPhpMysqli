<?php 
session_start();
include 'pages/dbcon.php';


if (isset($_POST['btnsignin'])) {
	
	 $admin_username = $_POST['username'];
	 $admin_password = $_POST['password'];
	 $query = "SELECT * FROM users where username='$admin_username' AND password='$admin_password'";
	 $result=mysqli_query($dbconn,$query) or die(mysqli_error());
	 echo "result";
	 $num_row = mysqli_num_rows($result) or die(mysqli_error());
	 echo "num_row";
	 $row = mysqli_fetch_array($result) or die(mysqli_error());
	 echo "row";
	 if ($num_row > 0) {
	 	$_SESSION['id'] = $row['id'];
	 	echo "string";
	 	header('Location: pages/dashboard.php');
	 }else{
	 	header('Location: index.php?error=invaliduser');
	 }
}
 ?>