<?php 
include 'header.php';
include 'include/db.php';
if(isset($_POST['category_skilled_edit']))
{
    $tok=$_POST['ref_skilled_edit'];
    
    $data =$database->collection("categories")->document("skilled")->collection("0")->document("$tok")->snapshot()->data();
            
    
            
      
 }         
?>


              <form action="category_add.php" method="POST">
                 <div class="col-lg-6">
                    <div class="card">
                       <div class="card">
                      <div class="card-header"><strong>Fill Category Details</strong></div>
                      <div class="card-body card-block">
                        <div class="form-group"><label class=" form-control-label"> Category Name</label><input type="text" name="name" value="<?php echo $data['name']; ?>"placeholder="Enter Category Name" class="form-control"></div>
                        <div class="row form-group">



                          <h4 class="text-info"><strong>Daily</strong></h4>
                          <div class="col-12">
                            <div class="form-group col-6"><label  class=" form-control-label">Service Fee</label><input type="text" name="ds" value="<?php echo $data['d_service']; ?>" placeholder="Enter price" class="form-control"></div>
                            <div class="form-group col-6"><label for="city" class=" form-control-label">Price</label><input type="text" name="dp" value="<?php echo $data['d_price']; ?>" placeholder="Enter price" class="form-control"></div>
                          </div>



                          <h4 class="text-info"><strong>Monthly</strong></h4>
                          <div class="col-12">
                            <div class="form-group col-6"><label  class=" form-control-label">Service Fee</label><input type="text"  name="ms" value="<?php echo $data['m_service']; ?>" placeholder="Enter price" class="form-control"></div>
                            <div class="form-group col-6"><label for="city" class=" form-control-label">Price</label><input type="text" name="mp" value="<?php echo $data['m_price']; ?>" placeholder="Enter price" class="form-control"></div>
                          </div>
                         



                          <h4 class="text-info " align="center"><strong>Fornigtly</strong></h4>
                        
                          <div class="col-12">
                            <div class="form-group col-6"><label  class=" form-control-label">Service Fee</label><input type="text" name="fs" value="<?php echo $data['f_service']; ?>" placeholder="Enter price" class="form-control"></div>
                            <div class="form-group col-6"><label for="city" class=" form-control-label">Price</label><input type="text" value="<?php echo $data['f_price']; ?>"name="fp" placeholder="Enter price" class="form-control"></div>
                          </div>
                    
                        </div>
                    
                      </div>
                    </div>
                  </div>
                            </div>
                            <div class="modal-footer">
                              <input type="hidden" name="ref_skilled_edit1" value="<?php echo $tok ?>">
                                <button type="submit"  class="btn btn-primary" name="update_category">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>

              </form>
                    </div>
                  </div>
                </form>


<?php 
include 'footer.php';

?>