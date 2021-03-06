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
 	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
 	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

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

				    <a href="#"><strong><span class="fa fa-book"></span> Books</strong></a>
				    <hr>
					<button class="btn btn-primary" data-toggle="modal" data-target="#bookform">Add Book</button>
					<br>
					<?php 
					$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
					if (strpos($url, 'meg=success')) {
					echo 	'<div>
							<div class="alert alert-success">
							  <strong>Success!</strong> Book Added Successfully.
							</div>
						</div>';
					}

					if (strpos($url, 'meg=editsucess')) {
					echo 	'<div>
							<div class="alert alert-success">
							  <strong>Success!</strong> Book Edited Successfully.
							</div>
						</div>';
					}
					?><br>
					<subsection>
						<table id="systable" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>Book ID</th>
									<th>Name</th>
									<th>Author</th>
									<th>Edition</th>
									<th>Total C/O</th>
									<th>Issued C/O</th>
									<th>Remaining C/O</th>
									<th>Damage/lost C/O</th>
									<th>ISBN</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php 
								$result=mysqli_query($dbconn,"SELECT * FROM books WHERE status = 'New' OR status = 'Active'");
								while($row = mysqli_fetch_array($result)) {

								?>
										<tr>
											<td><?php echo $row['bid']; ?></td>
											<td><?php echo $row['bname'] ?></td>
											<td><?php echo $row['author'] ?></td>
											<td><?php echo $row['edition'] ?></td>
											<td><?php echo $row['tocopies'] ?></td>
											<td><?php echo $row['tocopies'] ?></td>
											<td><?php echo $row['tocopies'] ?></td>
											<td><?php echo $row['dlcopies'] ?></td>
											<td><?php echo $row['isbn'] ?></td>
											<td><?php echo $row['status'] ?></td>
											<td>
												
											<a data-toggle="tooltip" data-placement="bottom" title="EDIT"  class="fa fa-edit fa-2x" href="book.edit.php?bookid=<?php echo $row['bid']; ?>"></a>

											<a data-toggle="tooltip" data-placement="bottom" title="Archive" class="fa fa-archive fa-2x" href="javascript:Alertarchive(<?php echo $row['bid']; ?>);"></a>

											<a data-toggle="tooltip" data-placement="bottom" title="Delete" class="fa fa-trash fa-2x" href="javascript:AlertDelete(<?php echo $row['bid']; ?>);"></a>

											<a data-toggle="tooltip" data-placement="bottom" title="View" class="fa fa-eye fa-2x" href="book.view.php?bookid=<?php echo $bid; ?>"></a>

													
											</td>
										</tr>

										<script type="text/javascript">
													function Alertarchive($bid) {
													var answer = confirm ("Do You Really Want To Archive????")
													if (answer)
													window.location.href = "book.archive.php?bookid=" +$bid+"";
														return true;
													}

													function AlertDelete($bid) {
													var answer = confirm ("Do You Really Want To Delete????")
													if (answer)
													window.location.href = "book.delete.php?bookid=" +$bid+"";
														return true;
													}


													
										</script>
				
  
								<?php }
							 ?>


							 </tbody>
						</table>
					</subsection>
					
					<model--forms>
					<!-- add new member -->
						<div class="modal fade" id="bookform" role="dialog">
						    <div class="modal-dialog">
						    
						      <!-- Modal content-->
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title"><b>Book Form</b> :: <i>Add New Book</i></h4>
						        </div>
						        <div class="modal-body">
						          <form method="POST" action="book.add.php">
						          	<div class="form-group">
						          		<label>Book Name</label>
						          		<input type="text" class="form-control" name="bname" required="required">	
						          	</div>
						          	<div class="form-group">
						          		<label>Author</label>
						          		<input type="text" class="form-control" name="author" required="required">	
						          	</div>
						          	<div class="form-group">
						          		<label>Edition</label>
						          		<input type="text" class="form-control" name="edition" required="required">	
						          	</div>
						          	<div class="form-group">
						          		<label>Total C/O</label>
						          		<input type="number" class="form-control" name="tocopies" required="required">	
						          	</div>
						          	<div class="form-group">
						          		<label>ISBN</label>
						          		<input type="number" class="form-control" name="isbn" required="required">	
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
						          		<button name="addnewbook" class="btn btn-primary"> Add Book</button>
						          		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						          	</div>
						          </form>
						        </div>
						        
						      </div>
						      
						    </div>
						  </div>



					</model--forms>
				</div>
			</div>
			<?php
/***********************************************************************************/
				 	
				 	echo $_SESSION['id'];
				 	} ?>
	
<script type="text/javascript">
			$(document).ready(function() {
			    $('#systable').DataTable( {
			        "order": [[ 0, "desc" ]]
			    } );
			} );
</script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>

























 




