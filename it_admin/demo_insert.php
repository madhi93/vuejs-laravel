

<?php
include 'include/db.php';


?>


<?php
if(isset($_POST['demo_insert'])){
	$val = $_POST['const'];

	$doc =$_POST['ref_d_insert'];

    $datas =$database->collection("language")->document("constant")->collection("language2")->document($doc)->snapshot()->data();
   
    $t =[$val];
    $data = array_merge($datas,$t);
    $dat = (ksort($data));

   
    $pushdata = $database->collection("language")->document("constant")->collection("language2")->document($doc)->set($data);

    
    header("Location: language.php");
}
?>