<?php include 'universal.php';


	if (isset($_POST['addnewbook'])) {
	 	echo $bname = $_POST['bname']; echo "<br>";
	 	echo $author = $_POST['author']; echo "<br>";
	 	echo $edition = $_POST['edition']; echo "<br>";
	 	echo $tocopies = $_POST['tocopies']; echo "<br>";
	 	echo $isbn = $_POST['isbn']; echo "<br>";
	 	echo $status = $_POST['status']; echo "<br>";

	 	$add_query = mysqli_query($dbconn,"INSERT INTO books(bname,author,edition,tocopies,isbn,status,timestampb) VALUES('$bname','$author','$edition','$tocopies','$isbn','$status',now())");


	 	header('Location: books.php?meg=success');
	 }
	  ?>