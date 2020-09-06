<?php 
include 'header.php';
include 'include/db.php'
?>

  <div class="content mt-3">
           <div class="row">


         <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="mx-auto d-block">
                      <?php    
            
                        $data =$database->collection("banner")->document("onBoardPageCustomer")->snapshot()->data();

                      ?>
                       <img class="rounded-square mx-auto d-block " style="height:250px; width:280px;" src="<?php echo $data['photoURL']; ?>" alt="Card image cap">
                        
                        
                    </div>
                    <hr>
                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $data['name'];?></h5>

                        <?php 
                        ?>
                  
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-info btn-lg rounded " data-toggle="modal" data-target="#smallmodal1" style="margin-left: 100px" >Edit</button>
                </div>
            </div>
        </div>
<div class="modal fade" id="smallmodal1" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Change Image</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
<center>
    <form enctype="multipart/form-data">
        <label>select image : </label>
        <input type="file" id="image" accept="image/*"><br><br>
        <button type="button " class="close pull-left" data-dismiss="modal" onclick="uploada()">Upload</button>
    </form>
</center>



     </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="mx-auto d-block">
                      <?php    

                        $data =$database->collection("banner")->document("onBoardPageWorker")->snapshot()->data();

                      ?>
                       <img class="rounded-square mx-auto d-block " style="height:250px; width:280px;" src="<?php echo $data['photoURL']; ?>" alt="Card image cap">
                        
                        
                    </div>
                    <hr>
                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $data['name'];?></h5>

                        <?php 
                        ?>
                  
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-info btn-lg rounded " data-toggle="modal" data-target="#small2" style="margin-left: 100px" >Edit</button>
                </div>
            </div>
        </div>




<div class="modal fade" id="small2" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabe" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Change Image</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
<center>
    <form enctype="multipart/form-data">
        <label>select image : </label>
        <input type="file" id="image2" accept="image/*"><br><br>
        <button type="button" class="close pull-left" data-dismiss="modal" onclick="uploadb()">Upload</button>
    </form>
</center>



     </div>
                        </div>
                    </div>
                </div>
<!------------------------------------------------------------------------------------------------------------->



<div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="mx-auto d-block">
                      <?php    

                        $data =$database->collection("banner")->document("selectPageCustomer")->snapshot()->data();

                      ?>
                       <img class="rounded-square mx-auto d-block " style="height:250px; width:280px;" src="<?php echo $data['photoURL']; ?>" alt="Card image cap">
                        
                        
                    </div>
                    <hr>
                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $data['name'];?></h5>

                        <?php 
                        ?>
                  
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-info btn-lg rounded " data-toggle="modal" data-target="#small3" style="margin-left: 100px" >Edit</button>
                </div>
            </div>
        </div>




<div class="modal fade" id="small3" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Change Image1</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
<center>
    <form enctype="multipart/form-data">
        <label>select image : </label>
        <input type="file" id="image3" accept="image/*"><br><br>
        <button type="button" class="close pull-left" data-dismiss="modal" onclick="uploadc()">Upload2</button>
    </form>
</center>



     </div>
                        </div>
                    </div>
                </div>
<!------------------------------------------------------------------------------------------------------------->


<div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="mx-auto d-block">
                      <?php    

                        $data =$database->collection("banner")->document("selectPageWorker")->snapshot()->data();

                      ?>
                       <img class="rounded-square mx-auto d-block " style="height:250px; width:280px;" src="<?php echo $data['photoURL']; ?>" alt="Card image cap">
                        
                        
                    </div>
                    <hr>
                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $data['name'];?></h5>

                        <?php 
                        ?>
                  
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-info btn-lg rounded " data-toggle="modal" data-target="#small4" style="margin-left: 100px" >Edit</button>
                </div>
            </div>
        </div>




<div class="modal fade" id="small4" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Change Image1</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
<center>
    <form enctype="multipart/form-data">
        <label>select image : </label>
        <input type="file" id="image4" accept="image/*"><br><br>
        <button type="button" class="close pull-left" data-dismiss="modal" onclick="uploadd()">Upload</button>
    </form>
</center>



     </div>
                        </div>
                    </div>
                </div>
<!------------------------------------------------------------------------------------------------------------->



<div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="mx-auto d-block">
                      <?php    

                        $data =$database->collection("banner")->document("signinPageCustomer")->snapshot()->data();

                      ?>
                       <img class="rounded-square mx-auto d-block " style="height:250px; width:280px;" src="<?php echo $data['photoURL']; ?>" alt="Card image cap">
                        
                        
                    </div>
                    <hr>
                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $data['name'];?></h5>

                        <?php 
                        ?>
                  
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-info btn-lg rounded " data-toggle="modal" data-target="#small5" style="margin-left: 100px" >Edit</button>
                </div>
            </div>
        </div>




<div class="modal fade" id="small5" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Change Image1</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
<center>
    <form enctype="multipart/form-data">
        <label>select image : </label>
        <input type="file" id="image5" accept="image/*"><br><br>
        <button type="button" class="close pull-left" data-dismiss="modal" onclick="uploade()">Upload2</button>
    </form>
</center>



     </div>
                        </div>
                    </div>
                </div>
<!------------------------------------------------------------------------------------------------------------->



<div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="mx-auto d-block">
                      <?php    

                        $data =$database->collection("banner")->document("signinPageWorker")->snapshot()->data();

                      ?>
                       <img class="rounded-square mx-auto d-block " style="height:250px; width:280px;" src="<?php echo $data['photoURL']; ?>" alt="Card image cap">
                        
                        
                    </div>
                    <hr>
                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $data['name'];?></h5>

                        <?php 
                        ?>
                  
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-info btn-lg rounded " data-toggle="modal" data-target="#small6" style="margin-left: 100px" >Edit</button>
                </div>
            </div>
        </div>




<div class="modal fade" id="small6" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Change Image1</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
<center>
    <form enctype="multipart/form-data">
        <label>select image : </label>
        <input type="file" id="image6" accept="image/*"><br><br>
        <button type="button" class="close pull-left" data-dismiss="modal" onclick="uploadf()">Upload</button>
    </form>
</center>



     </div>
                        </div>
                    </div>
                </div>
<!------------------------------------------------------------------------------------------------------------->



</div>
</div>






<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->



<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->


<script>
  // Your web app's Firebase configuration
  var _0x457f = ['initializeApp', 'hirelocal-a2988.firebaseapp.com', 'https://hirelocal-a2988.firebaseio.com', 'hirelocal-a2988', 'hirelocal-a2988.appspot.com'];
(function(_0x3d2e54, _0x457f07) {
    var _0x524e9d = function(_0x485db9) { while (--_0x485db9) { _0x3d2e54['push'](_0x3d2e54['shift']()); } };
    _0x524e9d(++_0x457f07);
}(_0x457f, 0x165));
var _0x524e = function(_0x3d2e54, _0x457f07) { _0x3d2e54 = _0x3d2e54 - 0x0; var _0x524e9d = _0x457f[_0x3d2e54]; return _0x524e9d; };
var firebaseConfig = { 'apiKey': 'AIzaSyDjx1VO4YRaWsNTW1ZbdYsPMe4OOe2SMEM', 'authDomain': _0x524e('0x4'), 'databaseURL': _0x524e('0x0'), 'projectId': _0x524e('0x1'), 'storageBucket': _0x524e('0x2'), 'messagingSenderId': '70694821318', 'appId': '1:70694821318:web:7334c6648ab7f6427066c7', 'measurementId': 'G-XZMH8G8Q3F' };
firebase[_0x524e('0x3')](firebaseConfig);
</script>
<script type="text/javascript" src="js/uploadimage.js"></script>


                       
</body>
</html>

<?php 
include 'footer.php'
?>