<?php
include 'include/db.php';
session_start();
error_reporting(0);


if(isset($_POST['invoiceUpdate']))
{
    $status="Send";
    $token=$_GET['token'];
    $t=$_POST['t'];
    $_SESSION["sid"] =$_POST['t'];

 
        $cityRef = $database->collection('orders_and_invoices')->document($token);
       
        $cityRef->update([
            ['path' => 'status', 'value' =>$status]
           
        ]);
        header("Location: MailCode.php");
       

}

?>

