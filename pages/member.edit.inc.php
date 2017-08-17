<?php include 'universal.php';


	if (isset($_POST['editmember'])) {
		echo $mid = $_POST['mid'];
	 	echo $fullname = $_POST['fullname'];
	 	echo $address = $_POST['address'];
	 	echo $mobile = $_POST['mobile'];
	 	echo $dob = $_POST['dob'];
	 	echo $email = $_POST['email'];
	 	echo $status = $_POST['status'];

	 	$add_query = mysqli_query($dbconn,"UPDATE members SET fullname = '$fullname',address = '$address',mobile = '$mobile',dob = '$dob',email = '$email',status = '$status',utimestamp = now() WHERE mid = '$mid'");


	 	header('Location: members.php?meg=editsucess');
	 }
	  ?>