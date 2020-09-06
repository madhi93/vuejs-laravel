<?php
include 'include/db.php';
include 'header.php';
?>


<div class="col-lg-8">
    <div class="card">
        <h4>
            <div class="card-header">Add admin</div>
        </h4>
        <div class="card-body card-block">
            <form method="post" action="add-admin.php" onsubmit="create_admin()" >
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-superpowers"></i></div>
                        <select class="form-control" name="role" required>
                            <option value="">Select Role</option>
                            <option>Operation Head</option>
                            <option>Finance Admin</option>
                            <option>IT Admin</option>
                            <option>Marketing Admin</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <input type="text" id="fname" name="fname" placeholder="First Name" class="form-control col-md-6" required>
                        <input type="text" id="lname" name="lname" placeholder="Last Name" class="form-control col-md-6" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                        <input type="email" id="aemail" name="email" placeholder="Email" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user-secret"></i></div>
                        <input type="password" id="p1" name="password" placeholder="Password" class="form-control" required minlength='7' >
                        <input type="password" id="apwd" name="cpassword" placeholder="Confirm Password" class="form-control" required minlength='7' onkeyup='validate()'>
                    </div>
                </div>
                <div class="form-actions form-group"><button type="submit" class="btn btn-info" disabled id="ana">Add New Admin</button></div>
            </form>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Admins</h4>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Head" role="tab" aria-controls="home" aria-selected="true">Operation Head </a>     
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Finance" role="tab" aria-controls="profile" aria-selected="false">Finance Admin </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#IT" role="tab" aria-controls="contact" aria-selected="false">IT Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#marketing" role="tab" aria-controls="contact" aria-selected="false">Marketing Admin</a>
                </li>
            </ul>
            <div class="tab-content pl-3 p-1" id="myTabContent">
                <div class="tab-pane fade show active" id="Head" role="tabpanel" aria-labelledby="home-tab">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Operation Head <a data-toggle="tooltip" title="Operation Head can access
    -General Setting
    -Email
    -Users
    -Categories
    -Languages
    -Services
    -Cancelled Services      
                                "><i class="fa fa-info-circle" aria-hidden="true"></i></a></strong>
                               
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $documents = $database->collection('Admins')->document('Operation Head')->collection('admin')->documents();
                                        $i=1;
                                        foreach ($documents as $doc) { 
                                        ?>
                                            <tr>
                                                <th scope="row"><?php echo $i; ?></th>
                                                <td><?php echo $doc['first_name']; ?></td>
                                                <td><?php echo $doc['last_name']; ?></td>
                                                <td><?php echo $doc['email']; ?></td>
                                                <td><a href="delete-admin.php?role=oh&id=<?php echo $doc->id();?>"><button class="btn btn-danger" onclick="deleteadmin('<?php echo $doc['email'];?>')">Delete</button></a></td>
                                            </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Finance" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Finance Admin <a data-toggle="tooltip" title="Finance Admin can access
    -General Setting
    -Redeem request
    -payment history
    -Order and invoice
    "><i class="fa fa-info-circle" aria-hidden="true"></i></a></strong></div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $documents = $database->collection('Admins')->document('Finance Admin')->collection('admin')->documents();
                                        $i=1;
                                        foreach ($documents as $doc) { 
                                        ?>
                                            <tr>
                                                <th scope="row"><?php echo $i; ?></th>
                                                <td><?php echo $doc['first_name']; ?></td>
                                                <td><?php echo $doc['last_name']; ?></td>
                                                <td><?php echo $doc['email']; ?></td>
                                                <td><a href="delete-admin.php?role=fa&id=<?php echo $doc->id();?>"><button class="btn btn-danger">Delete</button></a></td>
                                            </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="IT" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">IT Admin <a data-toggle="tooltip" title="IT Admin can access
    -Email
    -Users
    -Categories
    -Banner     
    "><i class="fa fa-info-circle" aria-hidden="true"></i></a></strong>

    </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $documents = $database->collection('Admins')->document('IT Admin')->collection('admin')->documents();
                                        $i=1;
                                        foreach ($documents as $doc) { 
                                        ?>
                                            <tr>
                                                <th scope="row"><?php echo $i; ?></th>
                                                <td><?php echo $doc['first_name']; ?></td>
                                                <td><?php echo $doc['last_name']; ?></td>
                                                <td><?php echo $doc['email']; ?></td>
                                                <td><a href="delete-admin.php?role=it&id=<?php echo $doc->id();?>"><button class="btn btn-danger">Delete</button></a></td>
                                             </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Marketing Admin   <a data-toggle="tooltip" title="Marketing Admin can access
    -Email
    -Banner
    -Review      
    "><i class="fa fa-info-circle" aria-hidden="true"></i></a></div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $documents = $database->collection('Admins')->document('Marketing Admin')->collection('admin')->documents();
                                        $i=1;
                                        foreach ($documents as $doc) { 
                                        ?>
                                            <tr>
                                                <th scope="row"><?php echo $i; ?></th>
                                                <td><?php echo $doc['first_name']; ?></td>
                                                <td><?php echo $doc['last_name']; ?></td>
                                                <td><?php echo $doc['email']; ?></td>
                                                <td><a href="delete-admin.php?role=ma&id=<?php echo $doc->id();?>"><button class="btn btn-danger">Delete</button></a></td>
                                             </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<?php
include 'footer.php';
?>