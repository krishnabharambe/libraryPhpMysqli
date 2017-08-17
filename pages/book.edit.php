<?php include 'universal.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Library</title>
	<title>Library | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" type="text/css" href="../assets/css/dashboard.style.css">
 	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
</head>
<body>


<?php if (!isset($_SESSION['id'])) {
				 	header("Location: ../index.php");
				 	exit();
				 }else{ 
/***********************************************************************************/
?>
		<div>
				<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
				    <div class="container-fluid">
				        <div class="navbar-header">
				            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				            </button>
				            <a class="navbar-brand" href="#">Dashboard</a>
				        </div>
				        <div class="navbar-collapse collapse">
				            <ul class="nav navbar-nav navbar-right">
				                <li class="dropdown">
				                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="fa fa-user-circle"></i> Admin <span class="caret"></span></a>
				                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
				                        <li><a href="#"><i class="fa fa-user-secret"></i> My Profile</a></li>
				                    </ul>
				                </li>
				                <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
				            </ul>
				        </div>
				    </div>
				    <!-- /container -->
				</div>

				<!-- /Header -->

				<!-- Main -->

				<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">

				    <ul class="nav nav-pills nav-stacked" style="border-right:1px solid black">
				        <!--<li class="nav-header"></li>-->
				        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				        <li><a href="members.php"><i class="fa  fa-user"></i> Member</a></li>
				        <li class="active"><a href="books.php"><i class="fa fa-book"></i> Books</a></li>
				        <li><a href="archived.php"><i class="fa fa-archive"></i> Archive</a></li>
				        <li><a href="changepassword.php"><i class="fa fa-lock"></i> Change Password</a></li>

				    </ul>
				</div><!-- /span-3 -->
				<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
				    <!-- Right -->

				    <a href="#"><strong><span class="fa fa-pencil-square-o"></span> Edit Members </strong></a>
				  <br>  <a href="books.php">Books</a> >> <a href="#">Edit Book</a>
				    <hr>
					<div>
						
					</div>
					
					<subsection>
						<table class="table table-striped">
							<?php 
							$map =$_GET['bookid'];
								$result=mysqli_query($dbconn,"SELECT * FROM books where bid = '$map'");
								while($row = mysqli_fetch_array($result)) { 
								    echo "<tr>";
										echo "<td>Book ID: <b>" .$row['bid']. "</b></td>";
										$bid = $row['bid'];
										echo "<td>Name: <b>" .$row['bname']. "</b></td>";
									echo "</tr>";
									echo "<tr>";	
										echo "<td>Author: <b>" .$row['author']. "</b></td>";
										echo "<td>Edition: <b>" .$row['edition']. "</b></td>";
									echo "</tr>";
									echo "<tr>";	
										echo "<td>Total C/O: <b>" .$row['tocopies']. "</b></td>";
										echo "<td>Issued C/O: <b>" .$row['tocopies']. "</b></td>";
									echo "</tr>";
									echo "<tr>";	
										echo "<td>Remain C/O: <b>" .$row['tocopies']. "</b></td>";
										echo "<td>Damage C/O: <b>" .$row['tocopies']. "</b></td>";
									echo "</tr>";
									echo "<tr>";	
										echo "<td>ISBN: <b>" .$row['isbn']. "</b></td>";
										echo "<td>status: <b>" .$row['status']. "</b></td>";		
									echo "</tr>";
								 }
							 ?>
						</table>
					</subsection>
					
					
					<!-- add new member -->
					<?php 
							$map =$_GET['bookid'];
								$result=mysqli_query($dbconn,"SELECT * FROM books where bid = '$map'");
								while($row = mysqli_fetch_array($result)) { ?>

						<div class="panel panel-default " style="width: 50%;">
						    <div class="panel-heading">
						    	<h3>Edit Book: <?php echo $row['bname']; ?></h3>
						    </div>
						      <!-- Modal content-->
						      <div class="panel-body" >
						 
						        <div style="">
						          <form method="POST" action="book.edit.inc.php">
						          	<div class="form-group">
						          		<label>Book ID :</label>
						          		<input type="text" class="form-control" value="<?php echo $row['bid']; ?>" name="bid" readonly>
						          	</div>
						          	<div class="form-group">
						          		<label>Book Name</label>
						          		<input type="text" class="form-control" value="<?php echo $row['bname']; ?>" name="bname" required="required">	
						          	</div>
						          	<div class="form-group">
						          		<label>Author</label>
						          		<input type="text" class="form-control" value="<?php echo $row['author']; ?>" name="author" required="required">	
						          	</div>
						          	<div class="form-group">
						          		<label>Edition</label>
						          		<input type="text" class="form-control" value="<?php echo $row['edition']; ?>" name="edition" required="required">	
						          	</div>
						          	<div class="form-group">
						          		<label>Total C/O</label>
						          		<input type="number" class="form-control" value="<?php echo $row['tocopies']; ?>" name="tocopies" required="required">	
						          	</div>
						          	<div class="form-group">
						          		<label>Damage/Lost C/O</label>
						          		<input type="number" class="form-control" value="<?php echo $row['dlcopies']; ?>"  name="dlcopies" required="required">	
						          	</div>
						          	<div class="form-group">
						          		<label>ISBN</label>
						          		<input type="number" class="form-control" value="<?php echo $row['isbn']; ?>" name="isbn" required="required">	
						          	</div>
						          	<div class="form-group">
						          		<label>Status</label>
						          		<select class="form-control" name="status">
						          			<option value="new">New</option>
						          			<option value="Active">Active</option>
						          			<option value="Archived">Archived</option>
						          		</select>
						          	</div>
						          	<div class="form-group">
						          		<button name="editbook" class="btn btn-primary">Edit Book</button>
						          	</div>
						          </form>
						        </div>
						        
						      </div>
						      
						    
						  </div>


						   <?php }
							 ?>
					
				</div>
			</div>
			<?php
/***********************************************************************************/
				 	
				 	echo $_SESSION['id'];
				 	} ?>
	
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>

























 




