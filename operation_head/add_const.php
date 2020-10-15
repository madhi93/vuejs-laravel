<?php include 'header.php' ; 

include 'include/db.php';?>

<div class="container">
	<h3>Fill Constant Details</h3>
	<hr><hr>
	<div class="row jstify-content-center">
		<div class="col-md-6">
			<form action="const_insert.php" method="POST">
			<div class="form-group">
				<input type="text" name="const" class="form-control" placeholder="Enter Constant Name">
			</div>
			<div class="form-group">
				<button type="submit" name="const_insert" class="btn btn-primary">Save</button>
			</div>
			</form>
		</div>
		
	</div>
</div>

<?php include('footer.php');?>



<?php include 'footer.php' ; ?>