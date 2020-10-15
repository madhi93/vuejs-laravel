<?php include 'include/db.php';
$data=$database->collection("Services")->document("business")->collection("business_services")->documents();
?>
<link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<div class="card">
    <div class="card-header">
        <strong class="card-title">Business</strong>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Customers</th>
                    <th scope="col">Workers</th>
                    <th scope="col">Service Type</th>
                    <th scope="col">Status</th>
                    <th scope="col">Start Date</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $d) {
                        if ($d->exists()) {
                    ?>
                <tr>
                    <th scope="row">1</th>
                    <td> <?php echo $d['name']; ?></td>
                    <td><?php echo $d['hired']; ?>  <select >
                            <option>view workers</option>
                            <?php for($i=0;$i<count($d['assign_workers']);$i++){
                                echo "<option disabled>".$d['assign_workers'][$i]."</option>";
                            } ?>
                        </select></td>
                    <td><?php echo $d['type'];?></td>
                    <td><button class="btn btn-outline-primary" disabled="true"><?php echo $d['status']; ?></button></td>
                    <td><?php echo $d['start_date']; ?></td>
                </tr>
                        <?php }}?>
            </tbody>
        </table>
    </div>
</div>
