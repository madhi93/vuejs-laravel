<?php
include ('include/db.php');

if(isset($_POST['category_skilled_delete']))
{
    $token=$_POST['ref_skilled_delete'];
    $database = $database->collection("categories")->document("skilled")->collection("0")->document($token)->delete();
;
   // $database= $database->collection('language')->document($token)->delete();

    if($database)
    {
        echo '<script>alert("Data delete Successfully")</script>'; 
        header("Location: demo_skilled.php");
    }
    else
    {
        echo '<script>alert("Not delete Data")</script>'; 
        header("Location: categories.php");

    }
}
?>