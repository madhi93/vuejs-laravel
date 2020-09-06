<?php 
include 'header.php';
include 'include/db.php';
      

?>
<style>
    #but
     {
    margin-left:240px;
    }
</style>
<?php
   $token=$_GET['token']; 
   $docRef = $database->collection('Services')->document('contractor')->collection('contractor_services')->document($token);
   $snapshot = $docRef->snapshot();
   
    
?>

 <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Update</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="updateCode1.php?token=<?php echo $snapshot->id() ?>" method="POST" enctype="multipart/form-data" class="form-horizontal" >
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" value="<?php  echo $snapshot['name'];?>" class="form-control" required></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">phone</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="phone_number" pattern="[1-9]{1}[0-9]{9}" value="<?php  echo $snapshot['phone_number'];?>" class="form-control" required></div>
                          </div>
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Hired</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="hired" value="<?php  echo $snapshot['hired'];?>" class="form-control" required></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Hours Worked</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="hours_worked" value="<?php  echo $snapshot['hours_worked'];?>" class="form-control" required></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="status" value="<?php  echo $snapshot['status'];?>" class="form-control" required></div>
                          </div>
                         

                          <div id="but">
                          

                          <button type="submit" class="btn btn-primary btn-sm" name="contractorUpdate">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>

                          </div>
                         
                        </form>
                      </div>
                     
                    </div>
    

        
<?php include 'footer.php'; ?>