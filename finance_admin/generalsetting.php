<?php
include 'header.php';
include 'include/db.php';

$data=$database->collection("G_setting")->document("setting")->snapshot()->data();

?>
<script type="text/javascript" src="assets/js/config.js">    </script>
    <script src="assets/js/signup.js" type="text/javascript"></script>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">API setting</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">API</th>
                        <th scope="col">Used/Unused</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>API key will be here</td>
                        <td>
                            <span class="p-2 alert-primary rounded">used</span>
                            <span class="p-2 alert-danger rounded">Unused</span>
                        </td>
                        <td>
                            <button class="btn btn-danger"> <i class="fa fa-trash"></i> </button>
                            <button class="btn btn-success"> <i class="fa fa-pencil"></i> </button>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>API key will be here</td>
                        <td>
                            <span class="p-2 alert-primary rounded">used</span>
                            <span class="p-2 alert-danger rounded">Unused</span>
                        </td>
                        <td>
                            <button class="btn btn-danger"> <i class="fa fa-trash"></i> </button>
                            <button class="btn btn-success"> <i class="fa fa-pencil"></i> </button>

                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div> <!-- api setting -->

<div class="col-lg-7">
    <!-- change password -->

    <div class="card">
        <div class="card-header">Change Password</div>
        <div class="card-body card-block">
            
                <div class="form-group">
                    <div class="input-group">
                        <input type="email" id="email2" name="email2" placeholder="Email" class="form-control" required onkeyup="
                            if(this.value=='')
                                document.getElementById('s').disabled=true;
                            else
                                document.getElementById('s').disabled=false;
                        ">
                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                    </div>
                </div>
                <div class="form-actions form-group">
                    <button type="button" class="btn btn-info mb-1" onclick="forgot1()" disabled id='s'>
                        Change Password
                    </button>
                </div>
            
        </div>
    </div>
</div>

<br>
<!-- conveince fees -->

<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Daily Hire</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <td><strong>Workers</strong></td>
                        <td><strong>Commision</strong></td>
                    </tr>
                    <tr>
                        <td><strong>1</strong></td>
                        <td>Rs <input type="number" value="<?php echo $data['daily_hire']['1'];?>" id="d1"></td>
                    </tr>
                    <tr>
                        <td><strong>1-5</strong></td>
                        <td>Rs <input type="number" value="<?php echo $data['daily_hire']['1-5'];?>" id="d1-5"></td>
                    </tr>
                    <tr>
                        <td><strong>5-20</strong></td>
                        <td>Rs <input type="number" value="<?php echo $data['daily_hire']['5-20'];?>" id="d5-20"></td>
                    </tr>
                    <tr>
                        <td><strong>>20</strong></td>
                        <td>Rs <input type="number" value="<?php echo $data['daily_hire']['>20'];?>" id=">20"></td>
                    </tr>
                    <tr>
                        <th><button class="btn btn-info" onclick="dailyhire('d')">Add</button></th>
                        <th><span id="note" class="text-danger" style="display:none">Updating please wait</span></th>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Monthly Hire</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <td><strong>Workers</strong></td>
                        <td><strong>Commision</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Per worker</strong></td>
                        <td>Rs <input type="number" value="<?php echo $data['monthly_hire']['per_worker'];?>" id="m"></td>
                    </tr>
                    <tr>
                        <th><button class="btn btn-info" onclick="dailyhire('m')">Add</button></th>
                        <th> <span id="note1" class="text-danger" style="display:none">Updating please wait</span></th>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div> <!-- convience fees -->
<!-- other -->
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="d-inline card-title">GST and Other taxes</h4>&nbsp;<span id="GST" class="text-danger" style="display:none">Updating please wait</span>
            <p class="card-text">Enter GST amount for services : <input type="number" id="gstvalue" class="col-lg-1" value="<?php echo $data['gst_other_tax'];?>" onblur="othersetting(1)">Rs.</p>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="d-inline card-title">Cancellation Charges</h4>&nbsp;<span id="cancel" class="text-danger" style="display:none">Updating please wait</span>
            <p class="card-text">Enter the Cancellation charges for customers (If cancelled) : <input type="number" id="cancelvalue"class="col-lg-1" value="<?php echo $data['cancellation_charge'];?>" onblur="othersetting(2)">Rs.</p>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="d-inline card-title">Nearby Radius</h4>&nbsp;<span id="nearby" class="text-danger" style="display:none">Updating please wait</span>
            <p class="card-text">
                Enter the radius for the service provider, <b>Daily:</b><input type="number" id="nearbyd"class="col-lg-1" value="<?php echo $data['nearby_radius']['daily'];?>" onblur="othersetting(3)">Km
                                        &nbsp;&nbsp;&nbsp; <b>Monthly:</b><input type="number" id="nearbym" class="col-lg-1" value="<?php echo $data['nearby_radius']['monthly'];?>" onblur="othersetting(4)">Km
        </p>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="d-inline card-title">Membership Charges</h4>&nbsp;<span id="member" class="text-danger" style="display:none">Updating please wait</span>
            <p class="card-text">Enter membership charges for customer, <b>Silver:</b><input type="number" id="membersilver"class="col-lg-1" value="<?php echo $data['membership_charges']['silver'];?>" onblur="othersetting(5)">Rs
                                        &nbsp;&nbsp;&nbsp;             <b>Gold:</b><input type="number" id="membergold" class="col-lg-1" value="<?php echo $data['membership_charges']['gold'];?>" onblur="othersetting(6)">Rs
                                        &nbsp;&nbsp;&nbsp;             <b>Platinum:</b><input type="number" id="memberplatinum" class="col-lg-1" value="<?php echo $data['membership_charges']['platinum'];?>" onblur="othersetting(7)">Rs
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="d-inline card-title">Time Limit for accepting offers</h4>&nbsp;<span id="time" class="text-danger" style="display:none">Updating please wait</span>
            <p class="card-text">Enter the time limit for accepting offers : <input type="number" id="timedays" class="col-lg-1" value="<?php echo $data['time_limit_for_accept_offer'];?>" onblur="othersetting(8)">Day</p>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>