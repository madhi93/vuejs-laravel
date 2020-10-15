<?php include 'header.php';

include 'include/db.php';


?>


<style>
  .sub {
    display: none;
    margin-left: 0px;
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

    background-color: pink;
  }




  button {
    border: none;
    background-color: transparent;
  }
</style>


<div class="content mt-3">
  <div class="animated fadeIn">

    <div class="row">


      
        <div class="card">



          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">

              <a class="nav-item nav-link active" data-toggle="tab" href="#custom-nav-individual" role="tab" aria-controls="custom-nav-individual" aria-selected="true">Individual</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#custom-nav-contractor" role="tab" aria-controls="custom-nav-contractor" aria-selected="false">Contractor</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#custom-nav-Business" role="tab" aria-controls="custom-nav-Business" aria-selected="false">Business</a>

            </div>
          </nav>

          <div class="tab-content pl-3 pt-2" id="nav-tabContent">

            <div class="tab-pane fade show active" id="custom-nav-individual" role="tabpanel" aria-labelledby="nav-home-tab">
              <table class="table table-striped table-bordered table-responsive">


                <thead class="table-dark">
                  <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>ID</th>
                    <th>Hired</th>
                    <th>Worked Hours</th>
                    <th>Status</th>
                    <th colspan='3'></th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $citiesRef = $database->collection('Services')->document('Individual')->collection('individual_services');
                  $documents = $citiesRef->documents();
                  foreach ($documents as $individual) {
                    if ($individual->exists()) {
                  ?>
                      <tr>
                        <td><img class="rounded-circle " style="height:40px;width:40px;" src="<?php echo $individual['img']; ?>" class="pic"><?php echo $individual['name']; ?></td>
                        <td><?php echo $individual['phone_number']; ?></td>
                        <td><?php echo $individual['ID']; ?></td>
                        <td><?php echo $individual['hired']; ?></td>
                        <td><?php echo $individual['hours_worked']; ?></td>
                        <td> <span class="alert  alert-warning"><?php echo $individual['status']; ?></span> </td>


                        <td><a href="individualServicesUpdate.php?token=<?php echo $individual->id() ?>" class="text-success"><i class="fa fa-edit"></i></a></td>
                        <td id="deleteTD">
                          <form action="DeleteCode1.php" method="POST">
                            <input type="hidden" name="ref_t_delete" value="<?php echo $individual->id() ?>">
                            <button type="submit" name="individualServicesDelete" class=" text-danger"><i class="fa fa-trash"></i></button>
                          </form>
                        </td>


                        <td>
                          <ul>
                            <li style="list-style: none;"><i class="fa fa-ellipsis-h"></i>

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




            <div class="tab-pane fade " id="custom-nav-contractor" role="tabpanel" aria-labelledby="nav-home-tab">
              <table class="table table-striped table-bordered table-responsive">


                <thead class="table-dark">
                  <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>ID</th>
                    <th>Hired</th>
                    <th>Worked Hours</th>
                    <th>Status</th>
                    <th colspan='3'></th>
                   
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $citiesRow = $database->collection('Services')->document('contractor')->collection('contractor_services');
                  $documents = $citiesRow->documents();
                  foreach ($documents as $contractor) {
                    if ($contractor->exists()) {
                  ?>


                      <tr>
                        <td><img class="rounded-circle " style="height:40px;width:40px;" src="<?php echo $contractor['img']; ?>" class="pic"> <?php echo $contractor['name']; ?></td>
                        <td><?php echo $contractor['phone_number']; ?></td>
                        <td><?php echo $contractor['ID']; ?></td>
                        <td><?php echo $contractor['hired']; ?></td>
                        <td><?php echo $contractor['hours_worked']; ?></td>
                        <td> <span class="alert  alert-warning"><?php echo $contractor['status']; ?></span> </td>

                        <td><a href="contractorUpdate.php?token=<?php echo $contractor->id() ?>" class="text-success"><i class="fa fa-edit"></i></a></td>
                        <td id="deleteTD">
                          <form action="DeleteCode1.php" method="POST">
                            <input type="hidden" name="ref_t_delete" value="<?php echo $contractor->id() ?>">
                            <button type="submit" name="contractorDelete" class=" text-danger"><i class="fa fa-trash"></i></button>
                          </form>
                        </td>


                        <td>
                          <ul>
                            <li style="list-style: none;"><i class="fa fa-ellipsis-h"></i>

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




            <div class="tab-pane fade " id="custom-nav-Business" role="tabpanel" aria-labelledby="nav-home-tab">
              <table class="table table-striped table-bordered table-responsive">


                <thead class="table-dark">
                  <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>ID</th>
                    <th>Hired</th>
                    <th>Worked Hours</th>
                    <th>Status</th>
                    <th colspan='3'></th>
                   
                  </tr>
                </thead>
                <tbody>


                  <?php
                  $citiescol = $database->collection('Services')->document('business')->collection('business_services');
                  $documents = $citiescol->documents();
                  foreach ($documents as $business) {
                    if ($business->exists()) {
                  ?>



                      <tr>
                        <td><img class="rounded-circle " style="height:40px;width:40px;" src="<?php echo $business['img']; ?>" class="pic"> <?php echo $business['name']; ?></td>
                        <td><?php echo $business['phone_number']; ?></td>
                        <td><?php echo $business['ID']; ?></td>
                        <td><?php echo $business['hired']; ?></td>
                        <td><?php echo $business['hours_worked']; ?></td>
                        <td> <span class="alert  alert-warning"><?php echo $business['status']; ?></span> </td>

                        <td><a href="businessUpdate.php?token=<?php echo $business->id() ?>" class="text-success"><i class="fa fa-edit"></i></a></td>
                        <td id="deleteTD">
                          <form action="DeleteCode1.php" method="POST">
                            <input type="hidden" name="ref_t_delete" value="<?php echo $business->id() ?>">
                            <button type="submit" name="businessDelete" class=" text-danger"><i class="fa fa-trash"></i></button>
                          </form>
                        </td>




                        <td>
                          <ul>
                            <li style="list-style: none;"><i class="fa fa-ellipsis-h"></i>

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
  </div><!-- .animated -->
</div><!-- .content -->
<?php include 'footer.php'; ?>