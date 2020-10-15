<?php
include 'include/db.php';


if(isset($_POST['individualServicesDelete']))
{
    $token=$_POST['ref_t_delete'];
    $d = $database->collection('Services')->document('Individual')->collection('individual_services')->document($token)->delete();
   

    if($d)
    {
        echo '<script type="text/javascript">alert("Data delete Successfully");
            window.location.href="services.php";
            </script>';
       
    }
    else
    {
        echo '<script type="text/javascript">alert("Data not delete");
        window.location.href="services.php";
        </script>';
    }
}



if(isset($_POST['contractorDelete']))
{
    $token=$_POST['ref_t_delete'];
    $d = $database->collection('Services')->document('contractor')->collection('contractor_services')->document($token)->delete();
   

    if($d)
    {
        echo '<script type="text/javascript">alert("Data delete Successfully");
            window.location.href="services.php";
            </script>';
       
    }
    else
    {
        echo '<script type="text/javascript">alert("Data not delete");
        window.location.href="services.php";
        </script>';
    }
}

if(isset($_POST['businessDelete']))
{
    $token=$_POST['ref_t_delete'];
    $d = $database->collection('Services')->document('business')->collection('business_services')->document($token)->delete();
   

    if($d)
    {
        echo '<script type="text/javascript">alert("Data delete Successfully");
            window.location.href="services.php";
            </script>';
       
    }
    else
    {
        echo '<script type="text/javascript">alert("Data not delete");
        window.location.href="services.php";
        </script>';
    }
}

if(isset($_POST['adminDelete']))
{
    $token=$_POST['ref_a_delete'];
    $d = $database->collection('cancelled_services')->document('Admin')->collection('admin')->document($token)->delete();
   

    if($d)
    {
        echo '<script type="text/javascript">alert("Data delete Successfully");
            window.location.href="cancelledservices.php";
            </script>';
       
    }
    else
    {
        echo '<script type="text/javascript">alert("Data not delete");
        window.location.href="cancelledservices.php";
        </script>';
    }
}

if(isset($_POST['labourDelete']))
{
    $token=$_POST['ref_a_delete'];
    $d = $database->collection('cancelled_services')->document('Labour')->collection('labour')->document($token)->delete();
   

    if($d)
    {
        echo '<script type="text/javascript">alert("Data delete Successfully");
            window.location.href="cancelledservices.php";
            </script>';
       
    }
    else
    {
        echo '<script type="text/javascript">alert("Data not delete");
        window.location.href="cancelledservices.php";
        </script>';
    }
}
?>