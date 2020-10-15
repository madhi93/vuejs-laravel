

<?php include('header.php');?>
<div class="container">
	<h3>Enter Constant Name</h3>
	<hr><hr>
	<div class="row jstify-content-center">
		<div class="col-md-6">
			<form action="add_constant.php" method="POST">
			<div class="form-group">
				<input type="text" name="const_name" class="form-control" placeholder="Enter Constant Name">
			</div>
			<div class="form-group">
				<input type="text" name="const" class="form-control" placeholder="Enter one constant">
			</div>
			
			<div class="form-group">
				 
				<button type="submit" name="add_constant" class="btn btn-primary">Save</button>
			</div>
			</form>
		</div>
		
	</div>
</div>

<?php include('footer.php');?>