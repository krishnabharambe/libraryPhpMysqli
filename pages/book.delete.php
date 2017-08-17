<?php include 'universal.php';

       echo $bid = $_GET['bookid'];
       echo $status = 'Deleted';


	 	$add_query = mysqli_query($dbconn,"UPDATE books SET status = '$status',utimestampb = now() WHERE bid = '$bid'");


	 	header('Location: books.php?meg=deletesucess');

	  ?>