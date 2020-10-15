<?php
include 'header.php';
include 'include/db.php'
?>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="mx-auto d-block">
                            <?php

                            $data = $database->collection("cities")->document("DC")->snapshot()->data();

                            ?>
                            <img class="rounded-square mx-auto d-block " style="height:250px; width:280px;" src="<?php echo $data['link']; ?>" alt="Card image cap">


                        </div>
                        <hr>
                        <h5 class="text-sm-center mt-2 mb-1"><?php echo $data['name']; ?></h5>

                        <?php
                        ?>

                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-info btn-lg rounded " data-toggle="modal" data-target="#smallmodal" style="margin-left: 100px">Edit</button>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>



<div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
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
                        <button type="button" onclick="upload()">Upload</button>
                    </form>
                </center>






                <!-- The core Firebase JS SDK is always required and must be listed first -->
                <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

                <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->



                <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->


                <script>
                    // Your web app's Firebase configuration
                    var firebaseConfig = {
                        apiKey: "AIzaSyDNR12vPWEgW3B5X2T4xpdyiLGbVcv5tL4",
                        authDomain: "fundacrud-91f82.firebaseapp.com",
                        databaseURL: "https://fundacrud-91f82.firebaseio.com",
                        projectId: "fundacrud-91f82",
                        storageBucket: "fundacrud-91f82.appspot.com",
                        messagingSenderId: "822821470189",
                        appId: "1:822821470189:web:fb4bd45e64245e5982b1e4",
                        measurementId: "G-MJ2V2Y49V7"
                    };
                    // Initialize Firebase
                    firebase.initializeApp(firebaseConfig);
                </script>
                <script type="text/javascript" src="assets/js/uploadimage.js"></script>

            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>