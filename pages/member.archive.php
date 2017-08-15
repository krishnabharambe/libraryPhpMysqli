<?php include 'universal.php';

       echo $mid = $_GET['memberid'];
       echo $status = 'arc';


	 	$add_query = mysqli_query($dbconn,"UPDATE members SET status = '$status',utimestamp = now() WHERE mid = '$mid'");


	 	header('Location: members.php?meg=archivesucess');

	  ?>