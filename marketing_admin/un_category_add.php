<?php
include 'include/db.php';


?>


<?php
if(isset($_POST['category_add'])){

    $name = $_POST['name'];

	$ds = $_POST['ds'];
	$dp = $_POST['dp'];

	$ms = $_POST['ms'];
	$mp = $_POST['mp'];

	$fs = $_POST['fs'];
	$fp = $_POST['fp'];

	 $data = [
     "name" => $name,
     "d_service"  => $ds,
     "d_price" => $dp,

      "m_service"  => $ms,
     "m_price" => $mp,

      "f_service"  => $fs,
     "f_price" => $fp,

     "status_a" => "false",
     "status_d" => "false",
     "status_m" => "false",
     "status_f" => "false"
	 ];
	 
	
   $datas =$database->collection("categories")->document("un_skilled")->collection("0")->add($data);
   printf('Added document with ID: %s' . PHP_EOL, $datas->id());
     
 header("Location: categories.php");
}

if(isset($_POST['update_category'])){

	$to =$_POST['ref_skilled_edit1'];

    $name = $_POST['name'];

	$ds = $_POST['ds'];
	$dp = $_POST['dp'];

	$ms = $_POST['ms'];
	$mp = $_POST['mp'];

	$fs = $_POST['fs'];
	$fp = $_POST['fp'];

	 $data = [  
     ["path"=>"name","value"=> $name],
     ["path"=>"d_service","value"=> $ds],
     ["path"=>"d_price","value"=> $dp],
     
      ["path"=>"m_service","value"=> $ms],
      ["path"=>"m_price","value"=> $mp],
     

      ["path"=>"f_service","value"=> $fs],
     ["path"=>"f_price","value"=> $fs],
	 ];
	 
	
   $datas =$database->collection("categories")->document("un_skilled")->collection("0")->document("$to")->update($data);
   
     
 header("Location: categories_unskilled.php");
}
?>