<?php 
include 'include/db.php'; 
error_reporting(0);



$status=$_REQUEST['statusm'];
$doc =$_REQUEST['token'];

$database->collection('categories')->document('skilled')->collection("0")->document("$doc")->update([['path'=>'status_m','value'=>$status]]);

echo $doc;


?>