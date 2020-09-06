<?php
include 'include/db.php';


?>


<?php
if(isset($_POST['add_language'])){
	$val = $_POST['lang_name'];

	

   $datas =$database->collection("language")->document("language1")->collection("language3")->document("c_language")->snapshot()->data();
    
    $t = [$val];
    $data = (array_merge($datas,$t));
   
    $pushdata = $database->collection("language")->document("language1")->collection("language3")->document("c_language")->set($data);

    
    header("Location: language.php");
}
?>