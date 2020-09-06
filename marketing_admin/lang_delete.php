<?php
include 'include/db.php';


?>

<?php 

if(isset($_POST['lang_delete'])){

    

    $j =$_POST['ref_lang_delete'];
    $datas =$database->collection("language")->document("language1")->collection("language3")->document("c_language")->snapshot()->data();
    
    unset($datas[$j]);
   
    
    
    $database->collection("language")->document("language1")->collection("language3")->document("c_language")->set($datas);
    
    header("Location: language.php");
}
?>