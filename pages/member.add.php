<?php include 'universal.php';


	if (isset($_POST['addnewmember'])) {
	 	echo $fullname = $_POST['fullname'];
	 	echo $address = $_POST['address'];
	 	echo $mobile = $_POST['mobile'];
	 	echo $dob = $_POST['dob'];
	 	echo $email = $_POST['email'];
	 	echo $status = $_POST['status'];


	 	$add_query = mysqli_query($dbconn,"INSERT INTO members (fullname,address,mobile,dob,email,status,timestamp) VALUES('$fullname','$address','$mobile','$dob','$email','$status',now())") or die(mysql_error($dbconn));
	 	header('Location: members.php?meg=success');
	 }
	  ?>