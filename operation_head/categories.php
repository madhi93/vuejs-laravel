 

 


<?php
       include 'include/db.php';
?>


<?php 

include 'header.php';

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
 <div class="row col-lg-12 " >
    <form action="categories.php" method="POST">

                  <button type="submit" class="btn btn-info btn-sm rounded bg-dark text-warning" style="margin-bottom: 10px;margin-top: 10px;"><h3>Skilled</h3></button>
                </form>
                <form action="categories_unskilled.php" method="POST">

                  <button type="submit" class="btn btn-info btn-sm rounded bg-dark text-warning" style="margin-bottom: 10px;margin-top: 10px; margin-left:10px;"><h3>UnSkilled</h3></button>
                </form>

</div>
<script>

     function changestatusa(id) {
        var d="ref_switch"+id; 
      var doc =document.getElementById(d).value; 
       var st="status"+id;
        var val = document.getElementById(st).checked;
            var xmlhttp = new XMLHttpRequest(); xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                
                }
            };
            xmlhttp.open("POST", "skilled_a.php?statusa="+ val+"&token="+doc, true); 
            xmlhttp.send();
        }



    function changestatusd(id) {
        var d="ref_switch"+id; 
      var doc =document.getElementById(d).value; 
       var st="status"+id;
        var val = document.getElementById(st).checked;
            var xmlhttp = new XMLHttpRequest(); xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                
                }
            };
            xmlhttp.open("POST", "skilled_d.php?statusd="+ val+"&token="+doc, true); 
            xmlhttp.send();
        }

    function changestatusm(id) {
        var d="ref_switch"+id; 
      var doc =document.getElementById(d).value; 
       var st="status"+id;
        var val = document.getElementById(st).checked;
            var xmlhttp = new XMLHttpRequest(); xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                
                }
            };
            xmlhttp.open("POST", "skilled_m.php?statusm="+ val+"&token="+doc, true); 
            xmlhttp.send();
        }

        function changestatusf(id) {
            var d="ref_switch"+id; 
      var doc =document.getElementById(d).value; 
       var st="status"+id; 
       
        var val = document.getElementById(st).checked;
            var xmlhttp = new XMLHttpRequest(); xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                   document.getElementById('label').innerHTML=this.responseText;
                }
            };
            xmlhttp.open("POST","skilled_f.php?statusf="+ val+"&token="+doc, true);
            xmlhttp.send();
        }
</script>

<div class="col-lg-12 " align="center">

                  <button  class="btn btn-info btn-sm rounded bg-dark text-light" style="margin-bottom: 10px;margin-top: 10px;"><h3>Skilled</h3></button>
          </div>
<div class="card-body">
      




    <?php
              $city = $database->collection("categories")->document("skilled")->collection("0");
                $documents = $city->documents();
                 $i=0;
                 $j=100;
                 $k=200;
                 $l=300;
                foreach ($documents as $document) {
                 
                $i++;
                $j++;
                $k++;
                $l++;
                   
              ?>
        

<div class="col-md-4">
<aside class="profile-nav alt">
<section class="card">
    <div class="card-header user-header alt bg-dark">
        <div class="media">
            <div class="media-body">
                <div class="row ">
                <h2 class="text-light display-6"><?php echo $document['name'];?></h2>
                <div class="dropdown">
                        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            
                            <div class="dropdown-menu-content">
                                <form action="category_edit_fill.php" method="POST">
                              <input type="hidden" name="ref_skilled_edit" value="<?php echo $document->id() ?>">
                                <button class="dropdown-item" type="submit" name="category_skilled_edit">Edit</button>
                            </form>

                               <form action="category_delete.php" method="POST">
                               <input type="hidden" name="ref_skilled_delete" value="<?php echo $document->id() ?>">
                                <button class="dropdown-item" type="submit" name="category_skilled_delete">Delete</button>
                                </form>
                            </div>
                        </div>
                      
                    </div>
                   
                </div>

            </div>
<?php
    $doc = $document->id();
    $data =$database->collection("categories")->document("skilled")->collection("0")->document("$doc")->snapshot()->data();
    $a= "hi";
    if( $data["status_a"] =="true"){
        $a="checked";
    }
    else{
        $a ="unchecked";
    }
    ?>


        <div class="row pull-right">
            <input type="hidden" id="ref_switch<?php echo $l;?>"  value="<?php echo $doc ; ?>">
         <label class="switch switch-default switch-success mr-2 "><input type="checkbox" class="switch-input pull-right" <?php echo $a ; ?> style="margin-right: 20px;"  id="status<?php echo $l;?>" onchange="changestatusa(<?php echo $l ;?>)"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
        </div>   
        </div>           

    </div>
             
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <a style="margin-left:10px;"><b>Type</b></a>
                            <span style="margin-left:40px;"><b>Service Fee</b></span>
                            <span style="margin-left:15px;"><b>Price</b></span>   
</li>
<li class="list-group-item">
    <a href="#" class="pull-left">Daily</a>
    <span class="badge badge-warning" style="margin-left:58px;"><?php echo $document['d_service'];?></span>
    <span class="badge badge-success " style="margin-left:15px;"><?php echo $document['d_price'];?></span>
     <?php
    $doc = $document->id();
    $data =$database->collection("categories")->document("skilled")->collection("0")->document("$doc")->snapshot()->data();
    $d= "hello";
    if( $data["status_d"] =="true"){
        $d="checked";
    }
    else{
        $d ="unchecked";
    }
    ?>
    <input type="hidden" id="ref_switch<?php echo $k;?>"  value="<?php echo $doc ; ?>">
    <label class="switch switch-default switch-pill switch-info mr-2 pull-right" ><input type="checkbox" class="switch-input" <?php echo $d ; ?> id="status<?php echo $k;?>" onchange="changestatusd(<?php echo $k ;?>)" > <span class="switch-label"></span> <span class="switch-handle"></span></label>

</li>
<li class="list-group-item">
    <a href="#" class="pull-left">Monthly</a>
    <span class="badge badge-warning" style="margin-left:35px;"><?php echo $document['m_service']; ?></span>
    <span class="badge badge-success " style="margin-left:15px;"><?php echo $document['m_price']; ?></span>
   <?php
    $doc = $document->id();
    $data =$database->collection("categories")->document("skilled")->collection("0")->document("$doc")->snapshot()->data();
    $m= "hlw";
    if( $data["status_m"] =="true"){
        $m ="checked";
    }
    else{
        $m ="unchecked";
    }
    ?>
     <input type="hidden" id="ref_switch<?php echo $j;?>"  value="<?php echo $doc ; ?>">
    <label class="switch switch-default switch-pill switch-info mr-2 pull-right" ><input type="checkbox" class="switch-input" <?php echo $m ; ?> id="status<?php echo $j;?>" onchange="changestatusm(<?php echo $j ;?>)"> <span class="switch-label"></span> <span class="switch-handle"></span></label>


</li>
<li class="list-group-item">

    <a href="#" class="pull-left">Fornightly </a>
    <span class="badge badge-warning" style="margin-left:25px;"><?php echo $document['f_service']; ?></span>
    <span class="badge badge-success " style="margin-left:15px;"><?php echo $document['f_price'] ; ?></span>

    <?php
    $doc = $document->id();
    $data =$database->collection("categories")->document("skilled")->collection("0")->document("$doc")->snapshot()->data();
     $f= "hii";
    if( $data["status_f"] =="true"){
        $f ="checked";
    }
    else{
        $f ="unchecked";
    }
    ?>
    <input type="hidden" id="ref_switch<?php echo $i;?>"  value="<?php echo $doc ; ?>">
    <label class="switch switch-default switch-pill switch-info mr-2 pull-right" ><input type="checkbox" class="switch-input" <?php echo $f ; ?> id="status<?php echo $i;?>" onchange="changestatusf(<?php echo $i ;?>)"> <span class="switch-label"></span> <span class="switch-handle"></span></label>
</li>
        </ul>
            </section>
        </aside>
    </div>

    <div>

<?php
  }
?>
   <div class="col-lg-12 " align="center">
   

                  <button type="text" class="btn btn-info btn-sm rounded bg-dark text-white" style="margin-bottom: 10px;margin-top: 10px;" data-toggle="modal" data-target="#mediumModal"><h3>Add Category</h3></button>

                <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php 
                                include '../include/db.php';

                                ?>
                                <div class="col-lg-12">
                                    <form action="category_add.php" method="POST">
                    <div class="card">
                      <div class="card-header"><strong>Fill Category Details</strong></div>
                      <div class="card-body card-block">
                        <div class="form-group"><label for="company" class=" form-control-label"> Category Name</label><input type="text" name="name" placeholder="Enter Category Name" class="form-control"></div>
                        <div class="row form-group">



                          <h4 class="text-info"><strong>Daily</strong></h4>
                          <div class="col-12">
                            <div class="form-group col-6"><label  class=" form-control-label">Service Fee</label><input type="text" name="ds" placeholder="Enter price" class="form-control"></div>
                            <div class="form-group col-6"><label for="city" class=" form-control-label">Price</label><input type="text" name="dp" placeholder="Enter price" class="form-control"></div>
                          </div>



                          <h4 class="text-info"><strong>Monthly</strong></h4>
                          <div class="col-12">
                            <div class="form-group col-6"><label  class=" form-control-label">Service Fee</label><input type="text"  name="ms" placeholder="Enter price" class="form-control"></div>
                            <div class="form-group col-6"><label for="city" class=" form-control-label">Price</label><input type="text" name="mp" placeholder="Enter price" class="form-control"></div>
                          </div>
                         



                          <h4 class="text-info " align="center"><strong>Fornigtly</strong></h4>
                        
                          <div class="col-12">
                            <div class="form-group col-6"><label  class=" form-control-label">Service Fee</label><input type="text" name="fs" placeholder="Enter price" class="form-control"></div>
                            <div class="form-group col-6"><label for="city" class=" form-control-label">Price</label><input type="text" name="fp" placeholder="Enter price" class="form-control"></div>
                          </div>
                    
                        </div>
                    
                      </div>
                    </div>
                  </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit"  class="btn btn-primary" name="category_add">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>

              </form>
                        
</div>





 </div>
</div>
<?php 

include 'footer.php';
?>