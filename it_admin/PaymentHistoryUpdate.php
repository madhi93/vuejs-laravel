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
    $docRef = $database->collection('payment_history')->document('service_seeker')->collection('ss_payment_history')->document($token);
    $snapshot = $docRef->snapshot();
    
?>

 <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Update</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="updateCode.php?token=<?php echo $snapshot->id() ?>" method="POST" enctype="multipart/form-data" class="form-horizontal" >
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" value="<?php  echo $snapshot['name'];?>" class="form-control" required></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Category</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="service_cat" value="<?php  echo $snapshot['service_cat'];?>" class="form-control" required></div>
                          </div>
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Sub Category</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="service_sub_cat" value="<?php  echo $snapshot['service_sub_cat'];?>" class="form-control" required></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Transaction ID</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="transaction_id" value="<?php  echo $snapshot['transaction_id'];?>" class="form-control" required></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Payment Date</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="text-input" name="payment_date" value="<?php echo strftime('%Y-%m-%d',
  strtotime($snapshot['payment_date'])); ?>" class="form-control" required></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Payment Amount</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="payment_amount" value="<?php  echo $snapshot['payment_amount'];?>" class="form-control" required></div>
                          </div>

                          <div id="but">
                          

                          <button type="submit" class="btn btn-primary btn-sm" name="PaymentHistoryUpdate">
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