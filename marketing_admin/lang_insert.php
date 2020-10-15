

<?php include('header.php');?>
<div class="container">
	<h3>Enter Language</h3>
	<hr><hr>
	<div class="row jstify-content-center">
		<div class="col-md-6">
			<form action="lang_insert_code.php" method="POST">
			<div class="form-group">
				<input type="text" name="lang_name" class="form-control" placeholder="Enter Language">
			</div>
			
			<div class="form-group">
				 
				<button type="submit" name="add_language" class="btn btn-primary">Save</button>
			</div>
			</form>
		</div>
		
	</div>
</div>

<?php include('footer.php');?>