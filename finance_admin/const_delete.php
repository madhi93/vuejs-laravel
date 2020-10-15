<?php
include 'include/db.php';


?>

<?php 

if(isset($_POST['demo_delete'])){

    $doc =$_POST['ref_d_delete'];

    $j =$_POST['ref_t_delete'];
    $datas =$database->collection("language")->document("constant")->collection("language2")->document($doc)->snapshot()->data();
    
    unset($datas[$j]);
   
    
    
    $database->collection("language")->document("constant")->collection("language2")->document($doc)->set($datas);
    
    header("Location: language.php");
}
?>