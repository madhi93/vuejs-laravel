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
        echo '<script>alert("Data Edited Successfully")</script>'; 
        header("Location: categories.php");
    }
    else
    {
        echo '<script>alert("Not Edited Data")</script>'; 
        header("Location: categories.php");

    }
}
?>