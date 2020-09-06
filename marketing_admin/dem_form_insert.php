<?php
include 'include/db.php';
 

?>


<?php
if(isset($_POST['demo_insert'])){
	$doc1 =$_POST['ref_d_insert'];

}
?>

<?php include('header.php');?>
<div class="container">
	<h3>Enter Constant</h3>
	<hr><hr>
	<div class="row jstify-content-center">
		<div class="col-md-6">
			<form action="demo_insert.php" method="POST">
			<div class="form-group">
				<input type="text" name="const" class="form-control" placeholder="Enter Constant">
			</div>
			
			<div class="form-group">
				<input type="hidden" name="ref_d_insert" value="<?php echo $doc1; ?>"> 
				<button type="submit" name="demo_insert" class="btn btn-primary">Save</button>
			</div>
			</form>
		</div>
		
	</div>
</div>

<?php include('footer.php');?>