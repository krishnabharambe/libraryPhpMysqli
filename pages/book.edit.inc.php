<?php include 'universal.php';


	if (isset($_POST['editbook'])) {
		echo $bid = $_POST['bid']; echo "<br>";
	 	echo $bname = $_POST['bname']; echo "<br>";
	 	echo $author = $_POST['author']; echo "<br>";
	 	echo $edition = $_POST['edition']; echo "<br>";
	 	echo $tocopies = $_POST['tocopies']; echo "<br>";
	 	echo $dlcopies = $_POST['dlcopies']; echo "<br>";
	 	echo $isbn = $_POST['isbn']; echo "<br>";
	 	echo $status = $_POST['status']; echo "<br>";

	 	$add_query = mysqli_query($dbconn,"UPDATE books SET bname='$bname',author='$author',edition='$edition',tocopies='$tocopies',dlcopies='$dlcopies',isbn='$isbn',status='$status',utimestampb=now() Where bid = '$bid'");


	 	header('Location: books.php?meg=success');
	 }
	  ?>