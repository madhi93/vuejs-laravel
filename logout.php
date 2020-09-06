<?php 
session_start();
 
if(isset($_SESSION['mail']))
{
    session_destroy();
    echo "<script>window.location='login.php';</script>";
}
else    
    echo "session not started";
?>