<?php 
include 'include/db.php'; 
error_reporting(0);



$status=$_REQUEST['statusf'];
$doc =$_REQUEST['token'];

$database->collection('categories')->document('un_skilled')->collection("0")->document("$doc")->update([['path'=>'status_f','value'=>$status]]);



?>