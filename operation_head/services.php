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
                   
                    <th>Status</th>
                    <th colspan='3'>Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $citiesRef = $database->collection('service_seeker')->where("role","==","Individual");
                  $documents = $citiesRef->documents();
                  foreach ($documents as $individual) {
                    $bookings = $database->collection('booking_details')->where("seeker","==",$individual->id())->documents();
                    foreach($bookings as $book){
                    if ($book->exists()) {
                  ?>
                      <tr>
                        <td><img class="rounded-circle " style="height:40px;width:40px;" src="<?php echo $individual['photoURL']; ?>" class="pic"><?php echo $individual['name']; ?></td>
                        <td><?php echo $individual->id(); ?></td>
                        <td><?php echo $book['service_ID']; ?></td>
                        <td><?php echo count($book['provider']); ?></td>
                        <?php 
                        if(count($book['onGoing'])>0)
                        {
                          echo "<td> <span class='alert alert-warning'>On Going</span> </td>";
                        }else if(count($book['completed'])>0){
                          echo "<td> <span class='alert alert-success'>Completed</span> </td>";
                        }else if(count($book['is_cancelled'])>0){
                          echo "<td> <span class='alert alert-danger'>Cancelled</span> </td>";
                        }else if(count($book['accepted'])>0)
                        echo "<td> <span class='alert alert-primary'>Accepted</span> </td>";
                        else
                        echo "<td> </td>";

                        ?>
                        


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
                   
                    <th>Status</th>
                    <th colspan='3'>Action</th>
                   
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $citiesRow = $database->collection('service_seeker')->where("role","==","Contractor");
                  $documents = $citiesRow->documents();
                  foreach ($documents as $contractor) {
                    $bookings1 = $database->collection('booking_details')->where("seeker","==",$contractor->id())->documents();
                    foreach($bookings1 as $book){
                    if ($book->exists()) {
                  ?>


                      <tr>
                        <td><img class="rounded-circle " style="height:40px;width:40px;" src="<?php echo $contractor['photoURL']; ?>" class="pic"> <?php echo $contractor['name']; ?></td>
                        <td><?php echo $contractor->id(); ?></td>
                        <td><?php echo $book['service_ID'] ?></td>
                        <td><?php echo count($book['provider']); ?></td>
                        <?php 
                        if(count($book['onGoing'])>0)
                        {
                          echo "<td> <span class='alert alert-warning'>On Going</span> </td>";
                        }else if(count($book['completed'])>0){
                          echo "<td> <span class='alert alert-success'>Completed</span> </td>";
                        }else if(count($book['is_cancelled'])>0){
                          echo "<td> <span class='alert alert-danger'>Cancelled</span> </td>";
                        }else if(count($book['accepted'])>0)
                        echo "<td> <span class='alert alert-primary'>Accepted</span> </td>";
                        else
                        echo "<td> </td>";

                        ?>
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
                  }}
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
                
                    <th>Status</th>
                    <th colspan='3'>Action</th>
                   
                  </tr>
                </thead>
                <tbody>


                  <?php
                  $citiescol = $database->collection('service_seeker')->where("role","==","Business");
                  $documents = $citiescol->documents();
                  foreach ($documents as $business) {
                    $bookings2 = $database->collection('booking_details')->where("seeker","==",$business->id())->documents();
                    foreach($bookings2 as $book){
                    if ($book->exists()) {
                  ?>
                      <tr>
                        <td><img class="rounded-circle " style="height:40px;width:40px;" src="<?php echo $business['photoURL']; ?>" class="pic"> <?php echo $business['name']; ?></td>
                        <td><?php echo $business->id(); ?></td>
                        <td><?php echo $book['service_ID']; ?></td>
                        <td><?php echo count($book['provider']); ?></td>
                        <?php 
                        if(count($book['onGoing'])>0)
                        {
                          echo "<td> <span class='alert alert-warning'>On Going</span> </td>";
                        }else if(count($book['completed'])>0){
                          echo "<td> <span class='alert alert-success'>Completed</span> </td>";
                        }else if(count($book['is_cancelled'])>0){
                          echo "<td> <span class='alert alert-danger'>Cancelled</span> </td>";
                        }else if(count($book['accepted'])>0)
                        echo "<td> <span class='alert alert-primary'>Accepted</span> </td>";
                        else
                        echo "<td> </td>";

                        ?>
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
                  }}
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