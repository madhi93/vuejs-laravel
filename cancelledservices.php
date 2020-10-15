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
                        
                   <table id="bootstrap-data-table1" class="col-sm-12 table table-striped table-bordered table-responsive">

                  
                    <thead class="table-dark">
                      <tr>
                        <th >Name</th>
                        <th>Service Category</th>
                        
                        <th>Name service Seeker</th>
                        <th>Skill/Unskilled</th>
                        <th>Status</th>
                        <th colspan='3'>Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>

                    <?php   
                        $citiesRef = $database->collection('booking_details');
                        $documents = $citiesRef->documents();
                        foreach ($documents as $admin) {
                            if ($admin->exists()) {
                              if(count($admin['is_cancelled'])>0){

                              
                    ?>

                      <tr>
                      <td><?php echo $admin['name']; ?></td>
                      <td><?php echo $admin['category']; ?></td>
                                  <?php 
                                  $seeker = $database->collection('service_seeker')->document($admin['seeker'])->snapshot()->data();
                                  echo "<td>".$seeker['name']."</td>";
                                  ?>
                        <td><?php echo $admin['skill']; ?></td>
                        
                        <td> <span class="alert alert-danger">Cancelled</span> </td>

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