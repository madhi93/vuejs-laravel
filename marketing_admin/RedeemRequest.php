<?php include 'header.php';
error_reporting(0);
include 'include/db.php';
      ?>

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
                                
</style>
        

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Redeem Request</strong>
                        </div>
                        <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead class="table-dark"> 
                      <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>ID</th>
                        <th>Wallet Amount</th>
                        <th>Status</th>
                        <th>Payment status</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                  <?php   
                         $sprovider = $database->collection('service_provider');
                         $documents = $sprovider->documents();
                         foreach ($documents as $document) {
                             if ($document->exists()) {
                                 $d=$document->id();
                                 $spMoney = $database->collection('sp_money')->document($d)->snapshot()->data();
                    ?>
                      <tr>
                      <td style="width: 200px; text-align: left;">
                            
                            <img src=<?php echo $document['photoURL']; ?> class="pic"> 
                            <?php echo $document['name']; ?> 
                     </td>
                        <td><?php echo $document->id(); ?> </td>
                        <td><?php echo $document['ID']; ?> </td>
                        <td><?php echo $spMoney['balance']; ?> </td>
                        <td><?php echo $spMoney['status']; ?> </td>
                        <td><?php echo $spMoney['payment_status']; ?> </td>
                       
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