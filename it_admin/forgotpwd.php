<?php include 'header.php';
include 'include/db.php'; ?>
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
<?php include 'footer.php'; ?>