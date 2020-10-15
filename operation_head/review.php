<?php
include 'header.php';
include 'include/db.php';

$worker = $database->collection("review")->document("worker")->collection("review")->documents();
$service_seeker = $database->collection("review")->document("service_seeker")->collection("review")->documents();
?>
<style>
    .checked {
        color: orange;
    }
</style>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Reviews</h4>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#worker" role="tab" aria-controls="home" aria-selected="true">Worker</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#seeker" role="tab" aria-controls="profile" aria-selected="false">Service Seeker</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="worker" role="tabpanel" aria-labelledby="home-tab">
                    <!-- worker -->
                    <?php foreach ($worker as $d) {
                        if ($d->exists()) {
                    ?>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title"><?php echo $d['from']; ?> <i class="fa fa-hand-o-right" aria-hidden="true"></i> <small><span class="badge badge-success float-right mt-1"><?php echo $d['to']; ?></span></small></strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <?php echo $d['comment']; ?>
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <?php for ($i = 1; $i <= $d['rating']; $i++) { ?>
                                            <i class="fa fa-star checked" aria-hidden="true"></i>
                                        <?php } ?>
                                        <button class="float-right btn btn-danger" onclick="deleteWorkerReview('<?php echo $d->id(); ?>')"> <i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!--end -->
                    <?php }
                    } ?>
                </div>
                <div class="tab-pane fade" id="seeker" role="tabpanel" aria-labelledby="profile-tab">

                    <!-- service-seeker -->
                    <?php foreach ($service_seeker as $ss) {
                        if ($ss->exists()) {
                    ?>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title"><?php echo $ss['from']; ?> <i class="fa fa-hand-o-right" aria-hidden="true"></i> <small><span class="badge badge-success float-right mt-1"><?php echo $ss['to']; ?></span></small></strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <?php echo $ss['comment'] . "<br>";
                                            ?>
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <?php for ($i = 1; $i <= $ss['rating']; $i++) { ?>
                                            <i class="fa fa-star checked" aria-hidden="true"></i>
                                        <?php } ?>
                                        <button class="float-right btn btn-danger" onclick="ssreviewdelete('<?php echo $ss->id();?>')"> <i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!--end -->
                    <?php }
                    } ?>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal for delete confirmation for worker -->

<?php
include 'footer.php';
?>