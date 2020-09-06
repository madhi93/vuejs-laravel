<?php
include 'include/db.php';


?>


<?php
if(isset($_POST['add_constant'])){

	$val = $_POST['const_name'];
	 $t = [$val];
	 $val_const = $_POST['const'];
	 $t_const = [$val_const];

   $datas =$database->collection("language")->document("constant")->collection("language2")->add($t_const);
   printf('Added document with ID: %s' . PHP_EOL, $datas->id());
   $doc2 = $datas->id();
   $datas =$database->collection("language")->document("constant")->collection("language2")->document("$doc2")->collection("0")->add($t);
   printf('Added document with ID: %s' . PHP_EOL, $datas->id());
    
   
    
 header("Location: language.php");
}



if(isset($_POST['delete_constant'])){

	$doc = $_POST['ref_const_delete'];
	 $city = $database->collection("language")->document("constant")->collection("language2")->document("$doc")->collection("0");
     $documents = $city->documents();
     foreach ($documents as $document) {    
                	$doc2= $document->id();
    $database->collection("language")->document("constant")->collection('language2')->document($doc)->collection("0")->document("$doc2")->delete();

}
	$database->collection("language")->document("constant")->collection('language2')->document($doc)->delete();
    
   
    
 header("Location: language.php");
}
?>