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
   $docRef = $database->collection('cancelled_services')->document('Labour')->collection('labour')->document($token);
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
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">name service seeker</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="name_service_seeker"  value="<?php  echo $snapshot['name service seeker'];?>" class="form-control" required></div>
                          </div>
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Category</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="service_category" value="<?php  echo $snapshot['service category'];?>" class="form-control" required></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service sub Category</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="service_sub_category" value="<?php  echo $snapshot['service sub category'];?>" class="form-control" required></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Cancelled by</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="cancelled_by" value="<?php  echo $snapshot['cancelled by'];?>" class="form-control" required></div>
                          </div>                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="status" value="<?php  echo $snapshot['status'];?>" class="form-control" required></div>
                          </div>
                         

                          <div id="but">
                          

                          <button type="submit" class="btn btn-primary btn-sm" name="labourUpdate">
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