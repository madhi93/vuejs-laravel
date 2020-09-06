<?php 
include 'header.php';
error_reporting(0);
include 'include/db.php';
      
?>
 <!-- Left Panel -->

   <!-- Right Panel -->
   <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
   
<style>
    .sub {
                                    display: none;
                                    margin-left: 50;
                                    width: 80px;
                                    font-size: 20px;
                                }
                                
                                ul li:hover .sub {
                                    display: block;
                                    position: absolute;
                                    background-color: black;
                                }
                                
                                .sub a {
                                    display: block;
                                    line-height: 30px;
                                    width: 100%;
                                    color: black;
                                    box-sizing: border-box;
                                    color: white;
                                    font-size: 15px;
                                    border-bottom: 1px solid rgb(204, 204, 179);
                                }
                                
                                .sub a:hover {
                                    background-color: black;
                                }
                                img
                                {
                                    width:40px;
                                    height:40px;
                                    border-radius: 50%;
                                }
                               
                               
                                td,tr
                                {
                                    text-align:center;
                                }
                                tr
                                {
                                  font-size:14px;
                                }
                                td 
                                {
                                    font-size:16px;
                                }
                                
                                
</style>
        
<div class="col-lg-12">
                            <div class="card">
                                
                                <div class="card-body">
                                   
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" id="labour-tab">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Workers</a>
                                            </li>
                                            <li class="nav-item" id="service-seeker-tab">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Customers</a>
                                            </li>
                                            
                                        </ul>
                                        <div class="tab-content pl-3 p-1" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                
                                                <div class="content mt-3" id='labour'>
                                                              <div class="animated fadeIn">
                                                                  <div class="row">

                                                                  <div class="col-md-12">
                                                                      <div class="card">
                                                                          <div class="card-header">
                                                                              <strong class="card-title">Labour</strong>
                                                                          </div>
                                                                          <div class="card-body">
                                                                    <table id="bootstrap-data-table" class="table table-striped table-bordered table-responsive">
                                                                      <thead class="table-dark"> 
                                                                        <tr>
                                                                          <th>Name</th>
                                                                          <th>Phone Number</th>
                                                                          <th>ID</th>
                                                                          <th>Jobs</th>
                                                                          <th>Hours Worked</th>
                                                                          <th>Status</th>
                                                                          <th colspan="2">Action</th>
                                                                          
                                                                         
                                                                         
                                                                        </tr>
                                                                      </thead>
                                                                      <tbody class="align-middle">
                                                                      <?php   
                                                                            $labour = $database->collection('service_provider');
                                                                            $documents = $labour->documents();
                                                                            foreach ($documents as $document) {
                                                                                if ($document->exists()) {
                                                                        ?>
                                                                        <tr class="align-middle">
                                                                        <td style="width: 200px; text-align: left;" class="align-middle">
                                                                             
                                                                              <img src=<?php echo $document['photoURL']; ?> class="img-circle"> 
                                                                              <?php echo $document['name']; ?> 
                                                                      </td>
                                                                          <td class="align-middle"><?php echo $document->id() ?> </td>
                                                                          <td class="align-middle"><?php echo $document['ID']; ?> </td>
                                                                          <td class="align-middle"><?php echo $document['jobs']; ?> </td>
                                                                          <td class="align-middle"><?php echo $document['hours_worked']; ?> </td>
                                                                          <td class="align-middle"><?php echo $document['status']; ?> </td>
                                                                          <td class="align-middle">
                                                                                <a href="UserUpdate.php?token=<?php echo $document->id() ?>" class="text-success"><i class="fa fa-edit"></i></a>
                                                                            </td>
                                                                            <td id="deleteTD"style="width:100px;">
                                                                                <form action="DeleteCode.php" method="POST">
                                                                                <input type="hidden" name="ref_t_delete" value="<?php echo $document->id() ?>">
                                                                                <button type="submit" name="UserDelete" class="btn text-danger"><i class="fa fa-trash"></i></button>
                                                                                </form>
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
                                                              </div><!-- .animated -->
                                                          </div><!-- .content -->


                                                      </div><!-- /#right-panel -->
                                                  </div>
                                                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                               
                                                <div class="content mt-3" id="service-seeker">
                                                          <div class="animated fadeIn">
                                                                  <div class="row">

                                                                  <div class="col-md-12">
                                                                      <div class="card">
                                                                          <div class="card-header">
                                                                              <strong class="card-title">Service Seeker</strong>
                                                                          </div>
                                                                          <div class="card-body">
                                                                    <table id="bootstrap-data-table" class="table table-striped table-bordered table-responsive">
                                                                      <thead class="table-dark"> 
                                                                        <tr>
                                                                          <th>Name</th>
                                                                          <th>Email</th>
                                                                          <th>Gender</th>
                                                                          <th>DOB</th>
                                                                          <th>Language</th>
                                                                          <th>Role</th>
                                                                          <th>Location</th>
                                                                          
                                                                        </tr>
                                                                      </thead>
                                                                      <tbody class="align-middle">
                                                                      <?php   
                                                                            $citiesRef = $database->collection('service_seeker');
                                                                            $documents = $citiesRef->documents();
                                                                            foreach ($documents as $document) {
                                                                                if ($document->exists()) {
                                                                        ?>
                                                                        <tr class="align-middle">
                                                                        <td style="width: 200px; text-align: left;" class="align-middle">
                                                                             
                                                                              <img src=<?php echo $document['photoURL']; ?> class="img-circle"> 
                                                                              <?php echo $document['name']; ?> 
                                                                      </td>
                                                                          <td class="align-middle"><?php echo $document['email']; ?> </td>
                                                                          <td class="align-middle"><?php echo $document['gender']; ?> </td>
                                                                          <td class="align-middle"><?php echo $document['dob']; ?> </td>
                                                                          <td class="align-middle">
                                                                          <ul>
                                                                          <li style="list-style: none;">
                                                                            <?php for($i=0;$i<count($document['Reg_lang']);$i++){
                                                                             echo $document['Reg_lang'][$i];
                                                                             echo "<br>";
                                                                            }
                                                                            ?>
                                                                        </li>
                                                                            
                                                                           
                                                                               
                                                                          </ul> 
                                                                          </td>
                                                                          <!-- <td class="align-middle"></td> -->
                                                                          <td class="align-middle"><?php echo $document['role']; ?> </td>
                                                                          <td class="align-middle"><?php echo $document['location']; ?> </td>
                                                                          
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
                                                              </div><!-- .animated -->
                                                          </div><!-- .content -->


                                                      </div><!-- /#right-panel -->
                                                      
                                                  </div>
                                                 
                                           
                                        </div>


                                </div>
                            </div>
                        </div>
                    </div>
       
       
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
    



<script>
$(document).ready(function(){
  $("#labour-tab").click(function(){
    $("#labour").show();
    $("#service-seeker").hide();
  });
  $("#service-seeker-tab").click(function(){
   
    $("#service-seeker").show();
    $("#labour").hide();
  });
});
</script>

        
<?php include 'footer.php'; ?>