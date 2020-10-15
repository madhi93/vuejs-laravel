<?php include 'header.php';
error_reporting(0);

include 'include/db.php'; ?>
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

    img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }


    td,
    tr {
        text-align: center;
        width: 345px;
    }

    tr {
        font-size: 15px;
    }
</style>


<!-- <a href="#"><button class="btn btn-outline-warning my-2 my-sm-0" type="submit" style="float: left; margin-left:15px; width:120px;">Labour</button></a> -->

<div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Invoice</strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered table-responsive t1">
                        <thead class="table-dark">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                       
                            <?php
                            $invoice = $database->collection('orders_and_invoices')->where('status', '=', "");
                            $documents = $invoice->documents();
                            foreach ($documents as $document) {
                                if ($document->exists()) {

                            ?>

                                    <tr>
                                        <td class="align-middle">
                                            <?php echo $document['name']; ?>
                                        </td>
                                        <td class="align-middle"><?php echo $document['email']; ?> </td>

                                        <td id="deleteTD">
                                            <form action="invoiceRequest.php?token=<?php echo $document->id() ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                                <input type="hidden" name="t" value="<?php echo $document->id() ?>">
                                                <button type="submit" name="invoiceUpdate" class="btn text-primary"><i class="fa fa-mail"></i>Send Mail</button>
                                            </form>
                                        </td>

                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        
                    </table>
                </div>
            </div>
        </div>


    </div>
</div><!-- .animated -->
<!-- /#right-panel -->

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
    });
</script>



<?php include 'footer.php'; ?>