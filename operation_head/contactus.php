<?php
include 'header.php';
error_reporting(0);
include 'include/db.php';
?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Reviews</h4>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#worker" role="tab" aria-controls="home" aria-selected="true"> Service Provider</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#seeker" role="tab" aria-controls="profile" aria-selected="false">Service Seeker</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="worker" role="tabpanel" aria-labelledby="home-tab">
                    <!-- Service provider -->
                    <?php   
                        $citiesRef = $database->collection('contact_us')->document('service_provider')->collection('service_provider_contact')->where('comment','=',"");
                        $documents = $citiesRef->documents();
                        foreach ($documents as $document) {
                            if ($document->exists()) {
                    ?>
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title"> <?php echo $document['name']; ?>  </strong><br>
                                        <small> <?php echo $document['email']; ?>  </small>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                        <?php echo $document['message']; ?>  
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <form action="DeleteCode.php" method="POST">
                                        <input type="hidden" name="ref_t_delete" value="<?php echo $document->id() ?>">
                                        <button type="submit" name="delete_comment" class="float-right btn btn-danger fa fa-trash-o" aria-hidden="true"></button>
                                        </form>
                                        <form action="updateCode.php?token=<?php echo $document->id() ?>" method="POST">
                                        <input type="text" class='form-data' placeholder="Add Comment" style="width:235px" name="comment">
                                        <button type="submit" name="send_comment" class=" float-right btn btn-info fa fa-long-arrow-right">
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                            <!--end -->
                </div>
                <div class="tab-pane fade" id="seeker" role="tabpanel" aria-labelledby="profile-tab">

                    <!-- Service-seeker -->
                    <?php   
                        $citiesRef = $database->collection('contact_us')->document('service_seeker')->collection('service_seeker_contact')->where('comment','=',"");
                        $documents = $citiesRef->documents();
                        foreach ($documents as $document) {
                            if ($document->exists()) {
                    ?>
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title"> <?php echo $document['name']; ?>  </strong><br>
                                        <small> <?php echo $document['email']; ?>  </small>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                        <?php echo $document['message']; ?>  
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <form action="DeleteCode.php" method="POST">
                                        <input type="hidden" name="ref_t_delete" value="<?php echo $document->id() ?>">
                                        <button type="submit" name="seeker_delete_comment" class="float-right btn btn-danger fa fa-trash-o" aria-hidden="true"></button>
                                        </form>
                                        <form action="updateCode.php?token=<?php echo $document->id() ?>" method="POST">
                                        <input type="text" class='form-data' placeholder="Add Comment" style="width:235px" name="comment">
                                        <button type="submit" name="seeker_send_comment" class=" float-right btn btn-info fa fa-long-arrow-right">
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>

                            <!--end -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal for delete confirmation for worker -->

<?php
include 'footer.php';
?>