<?php include 'header.php';
error_reporting(0);

include 'include/db.php';?>
 <!-- Left Panel -->

   <!-- Right Panel -->
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
                                  font-size:15px;
                                }
                               
                                
                                
</style>
        
<a href="#"><button class="btn btn-primary my-2 my-sm-0" type="submit" style="float: left; margin-left:15px; width:120px;">Service Seeker</button></a>
        <!-- <a href="#"><button class="btn btn-outline-warning my-2 my-sm-0" type="submit" style="float: left; margin-left:15px; width:120px;">Labour</button></a> -->
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Payment History</strong>
                        </div>
                        <div class="card-body">
                        <table  id="bootstrap-data-table" class="table table-striped table-bordered table-responsive">
                        <thead class="table-dark"> 
                      <tr>
                        <th>Name</th>
                        <th>Service Category</th>
                        <th>Service Sub Category</th>
                        <th>Transaction ID</th>
                        <th>Payment Date</th>
                        <th>Payment Amount</th>
                        <th></th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                  <?php   
                        $sprovider = $database->collection('service_provider');
                        $documents = $sprovider->documents();
                        foreach ($documents as $document) {
                            if ($document->exists()) {
                                $d=$document->id();
                                $wallet = $database->collection('wallet_details')->document($d)->snapshot()->data();
                                // $wdocuments = $wallet->documents();
                                // foreach ($wdocuments as $wdocument) {
                                // if ($wdocument->exists()) {
                    ?>
                      
                      <tr>
                      <td style="width: 200px; text-align: left;" class="align-middle">
                           
                      <img src=<?php echo $document['photoURL']; ?> class="img-circle"> 
                     <?php echo $document['name']; ?> 
                     </td>
                        <td class="align-middle"><?php echo $document['service1']; ?> </td>
                        <td class="align-middle"><?php echo $document['service2']; ?> </td>
                        <td>
                        <?php for($i=0;$i<count($wallet['transactionID']);$i++){
                            echo $wallet['transactionID'][$i];
                            echo "<br>";
                        }
                        ?>
                        </td>
                        <td>
                         <?php for($i=0;$i<count($wallet['date']);$i++){
                            echo $wallet['date'][$i];
                            echo "<br>";
                        }
                        ?>
                        </td>
                        <td>
                         <?php for($i=0;$i<count($wallet['amounts']);$i++){
                            echo $wallet['amounts'][$i];
                            echo "<br>";
                        }
                        ?>
                        </td>
                        
                        
                    <td id="deleteTD">
                        <form action="DeleteCode.php" method="POST">
                        <input type="hidden" name="ref_t_delete" value="<?php echo $document->id() ?>">
                        <button type="submit" name="PaymentHistoryDelete" class="btn text-danger"><i class="fa fa-trash"></i></button>
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

    <!-- Right Panel -->

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