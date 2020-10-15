<?php
include 'include/db.php';
error_reporting(0);
if(isset($_POST['PaymentHistoryDelete']))
{
    $token=$_POST['ref_t_delete'];
    $d = $database->collection('wallet_details')->document($token)->delete();
   

    if($d)
    {
        echo '<script type="text/javascript">alert("Data delete Successfully ");
            window.location.href="PaymentHistory.php";
            </script>';
        // echo '<script>alert("Data delete Successfully")</script>'; 
        // header("Location: PaymentHistory.php");
    }
    else
    {
        echo '<script type="text/javascript">alert("Data not delete  ");
            window.location.href="PaymentHistory.php";
            </script>';
        // echo '<script>alert("Not delete Data")</script>'; 
        // header("Location: PaymentHistory.php");

    }
}

if(isset($_POST['UserDelete']))
{
    $token=$_POST['ref_t_delete'];
    $d= $database->collection('service_provider')->document($token)->delete();

    if($d)
    {
        echo '<script type="text/javascript">alert("Data delete Successfully");
            window.location.href="Users.php";
            </script>';
            
        // echo '<script>alert("Data delete Successfully")</script>'; 
        // header("Location: Users.php");
    }
    else
    {
        echo '<script type="text/javascript">alert("Data not delete");
        window.location.href="Users.php";
        </script>';

        // echo '<script>alert("Not delete Data")</script>'; 
        // header("Location: Users.php");

    }
}

if(isset($_POST['delete_comment']))
{
    $token=$_POST['ref_t_delete'];
    $d = $database->collection('contact_us')->document('service_provider')->collection('service_provider_contact')->document($token)->delete();
   

    if($d)
    {
        echo '<script type="text/javascript">alert("Data delete Successfully");
            window.location.href="contactus.php";
            </script>';
            
        // echo '<script>alert("Data delete Successfully")</script>'; 
        // header("Location: Users.php");
    }
    else
    {
        echo '<script type="text/javascript">alert("Data not delete");
        window.location.href="contactus.php";
        </script>';

        // echo '<script>alert("Not delete Data")</script>'; 
        // header("Location: Users.php");

    }
}

if(isset($_POST['seeker_delete_comment']))
{
    $token=$_POST['ref_t_delete'];
    $d = $database->collection('contact_us')->document('service_seeker')->collection('service_seeker_contact')->document($token)->delete();
   

    if($d)
    {
        echo '<script type="text/javascript">alert("Data delete Successfully");
            window.location.href="contactus.php";
            </script>';
            
        // echo '<script>alert("Data delete Successfully")</script>'; 
        // header("Location: Users.php");
    }
    else
    {
        echo '<script type="text/javascript">alert("Data not delete");
        window.location.href="contactus.php";
        </script>';

        // echo '<script>alert("Not delete Data")</script>'; 
        // header("Location: Users.php");

    }
}
?>