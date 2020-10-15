<?php 
session_start();
$id=$_REQUEST['id'];
$_SESSION['mail']=$id;
echo "login successfull !";

?>