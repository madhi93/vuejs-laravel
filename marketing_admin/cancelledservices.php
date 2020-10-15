<?php include 'header.php'; 
include 'include/db.php';

?>

<style>


.sub{
  display: none;
  margin-left: 0px;
  width: 80px;
  font-size: 20px;
  
}

ul li:hover .sub{
  display: block;
  position: absolute;
  background-color: black;
}
.sub a{

  display: block;
  line-height: 30px;
  width: 100%;
  color: black;
  box-sizing: border-box;
  color: white;
  font-size: 15px;
  border-bottom: 1px solid rgb(204, 204, 179);

}
.sub a:hover{

  background-color: pink;
}  

         

button{
  border:none;
  background-color:transparent;
}
</style>  

<div class="content mt-3">
            <div class="animated fadeIn">
           
               
                
                
                <div class="col-md-12">
                    <div class="card">
                        
                    <nav>
                         <div class="nav nav-tabs" id="nav-tab" role="tablist">

                               <a class="nav-item nav-link active"  data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="true">Admin</a>
                               <a class="nav-item nav-link"  data-toggle="tab" href="#labour" role="tab" aria-controls="labour" aria-selected="false">Labour /service Seeker</a>
                             
                                   
                          </div>
                   </nav>
                   


                   <div class="tab-content pl-3 pt-2" id="nav-tabContent">

                   <div class="tab-pane fade show active" id="admin" role="tabpanel" aria-labelledby="nav-home-tab">
                  <table id="bootstrap-data-table1" class="col-sm-12 table table-striped table-bordered table-responsive">

                  
                    <thead class="table-dark">
                      <tr>
                        <th >Name</th>
                        <th>Service Category</th>
                        <th>Service Sub Category</th>
                        <th>Name service Seeker</th>
                        <th>Cancelled By</th>
                        <th>Status</th>
                        <th colspan='3'></th>
                        
                      </tr>
                    </thead>
                    <tbody>

                    <?php   
                        $citiesRef = $database->collection('cancelled_services')->document('Admin')->collection('admin');
                        $documents = $citiesRef->documents();
                        foreach ($documents as $admin) {
                            if ($admin->exists()) {
                    ?>

                      <tr>
                      <td><img class="rounded-circle "style="height:40px;width:40px;" src="<?php echo $admin['img']; ?>" class="pic"><?php echo $admin['name']; ?></td>
                      <td><?php echo $admin['service category']; ?></td>
                        <td><?php echo $admin['service sub category']; ?></td>
                        <td><?php echo $admin['name service seeker']; ?></td>
                        <td><?php echo $admin['cancelled by']; ?></td>
                        <td> <span class="alert  alert-warning"><?php echo $admin['status']; ?></span> </td>

                        <td><a href="updateadmin.php?token=<?php echo $admin->id() ?>" class="text-success"><i class="fa fa-edit"></i></a></td>
                        <td id="deleteTD" >
                          <form action="DeleteCode1.php" method="POST">
                          <input type="hidden" name="ref_a_delete" value="<?php echo $admin->id() ?>">
                          <button type="submit" name="adminDelete" class=" text-danger"><i class="fa fa-trash"></i></button>
                          </form>
                    </td>
                    


                        <td><ul><li style="list-style: none;"><i class="fa fa-ellipsis-h"></i>
							            
                       <div class="sub">
								  	    <ul>
                        	<li style="list-style: none;"><a style="text-decoration: none;" href="#">View</a></li>
                        	<li style="list-style: none;"><a style="text-decoration: none;" href="#">Block User</a></li>
                        </ul> 
						          	</div>
                             
                     
						           </li>
					              </ul>  </td>
                        </tr>
  
                        <?php
                        }
                    }
                    ?>

                    </tbody>
                  </table>
                        </div>




                  <div class="tab-pane fade" id="labour" role="tabpanel" aria-labelledby="nav-home-tab">
                  <table id="bootstrap-data-table2" class="table table-striped table-bordered table-responsive">

                  
                    <thead class="table-dark">
                      <tr>
                      <th>Name</th>
                        <th>Service Category</th>
                        <th>Service Sub Category</th>
                        <th>Name service Seeker</th>
                        <th>Cancelled By</th>
                        <th>Status</th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php   
                        $citiesRef = $database->collection('cancelled_services')->document('Labour')->collection('labour');
                        $documents = $citiesRef->documents();
                        foreach ($documents as $labour) {
                            if ($labour->exists()) {
                    ?>

                      <tr>
                      <td><img class="rounded-circle "style="height:40px;width:40px;" src="<?php echo $labour['img']; ?>" class="pic"> <?php echo $labour['name']; ?></td>
                      <td><?php echo $labour['service category']; ?></td>
                      <td><?php echo $labour['service sub category']; ?></td>
                        <td><?php echo $labour['name service seeker']; ?></td>
                        <td><?php echo $labour['cancelled by']; ?></td>
                        <td> <span class="alert alert-warning"><?php echo $labour['status']; ?></span> </td>

                        <td><a href="updatelabour.php?token=<?php echo $labour->id() ?>" class="text-success"><i class="fa fa-edit"></i></a></td>
                        <td id="deleteTD" >
                          <form action="DeleteCode1.php" method="POST">
                          <input type="hidden" name="ref_a_delete" value="<?php echo $labour->id() ?>">
                          <button type="submit" name="labourDelete" class="text-danger" style="border:none;background-color:transparent"><i class="fa fa-trash"></i></button>
                          </form>
                    </td>


                        <td>
                        <ul><li style="list-style: none;"><i class="fa fa-ellipsis-h"></i>
							            
                       <div class="sub">
								  	    <ul>
                        	<li style="list-style: none;"><a style="text-decoration: none;" href="#">View</a></li>
                        	<li style="list-style: none;"><a style="text-decoration: none;" href="#">Block User</a></li>
                        </ul> 
						          	</div>
                             
                     
						           </li>
					              </ul> 
                       </td>
                        </tr>
                      
                     
                        <?php
                        }
                    }
                    ?>
                    </tbody>
                  </table>
                        </div>



                        </div>



                    </div>
                </div>
                

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script> 
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
     <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script> 
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>




<?php include 'footer.php'; ?>