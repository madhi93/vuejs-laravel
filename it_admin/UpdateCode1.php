<?php
include 'include/db.php';

if(isset($_POST['individualServicesUpdate']))
{
    $name=$_POST['name'];
    $phone_number=$_POST['phone_number'];
    $hired=$_POST['hired'];
    $hours_worked=$_POST['hours_worked'];
    $status=$_POST['status'];
  
    $token=$_GET['token'];
   
    $cityRef = $database->collection('Services')->document('Individual')->collection('individual_services')->document($token);
        $cityRef->update([
            ['path' => 'name', 'value' =>$name],
            ['path' => 'phone_number', 'value' =>$phone_number],
            ['path' => 'hired', 'value' =>$hired],
            ['path' => 'hours_worked', 'value' =>$hours_worked],
            ['path' => 'status', 'value' =>$status]
        ]);
        if($cityRef)
        {
            echo '<script type="text/javascript">alert("Data Update Successfully");
            window.location.href="services.php";
            </script>';
            
        }
        else
        {
            echo '<script type="text/javascript">alert("Data Not Update ");
            window.location.href="services.php";
            </script>';
           
        }
        

}




if(isset($_POST['contractorUpdate']))
{
    $name=$_POST['name'];
    $phone_number=$_POST['phone_number'];
    $hired=$_POST['hired'];
    $hours_worked=$_POST['hours_worked'];
    $status=$_POST['status'];
  
    $token=$_GET['token'];
   
    $cityRef = $database->collection('Services')->document('contractor')->collection('contractor_services')->document($token);
        $cityRef->update([
            ['path' => 'name', 'value' =>$name],
            ['path' => 'phone_number', 'value' =>$phone_number],
            ['path' => 'hired', 'value' =>$hired],
            ['path' => 'hours_worked', 'value' =>$hours_worked],
            ['path' => 'status', 'value' =>$status]
        ]);
        if($cityRef)
        {
            echo '<script type="text/javascript">alert("Data Update Successfully");
            window.location.href="services.php";
            </script>';
            
        }
        else
        {
            echo '<script type="text/javascript">alert("Data Not Update ");
            window.location.href="services.php";
            </script>';
           
        }
        

}

if(isset($_POST['businessUpdate']))
{
    $name=$_POST['name'];
    $phone_number=$_POST['phone_number'];
    $hired=$_POST['hired'];
    $hours_worked=$_POST['hours_worked'];
    $status=$_POST['status'];
  
    $token=$_GET['token'];
   
    $cityRef = $database->collection('Services')->document('business')->collection('business_services')->document($token);
        $cityRef->update([
            ['path' => 'name', 'value' =>$name],
            ['path' => 'phone_number', 'value' =>$phone_number],
            ['path' => 'hired', 'value' =>$hired],
            ['path' => 'hours_worked', 'value' =>$hours_worked],
            ['path' => 'status', 'value' =>$status]
        ]);
        if($cityRef)
        {
            echo '<script type="text/javascript">alert("Data Update Successfully");
            window.location.href="services.php";
            </script>';
            
        }
        else
        {
            echo '<script type="text/javascript">alert("Data Not Update ");
            window.location.href="services.php";
            </script>';
           
        }
        

}


if(isset($_POST['adminUpdate']))
{
    $name=$_POST['name'];
    $name_service_seeker=$_POST['name_service_seeker'];
    $service_category=$_POST['service_category'];
    $service_sub_category=$_POST['service_sub_category'];
    $cancelled_by=$_POST['cancelled_by'];
    $status=$_POST['status'];
  
    $token=$_GET['token'];
   
    $cityRef = $database->collection('cancelled_services')->document('Admin')->collection('admin')->document($token);
        $cityRef->update([
            ['path' => 'name', 'value' =>$name],
            ['path' => 'name service seeker', 'value' =>$name_service_seeker],
            ['path' => 'service category', 'value' =>$service_category],
            ['path' => 'service sub category', 'value' =>$service_sub_category],
            ['path' => 'cancelled by', 'value' =>$cancelled_by],
            ['path' => 'status', 'value' =>$status]
        ]);
        if($cityRef)
        {
            echo '<script type="text/javascript">alert("Data Update Successfully");
            window.location.href="cancelledservices.php";
            </script>';
            
        }
        else
        {
            echo '<script type="text/javascript">alert("Data Not Update ");
            window.location.href="cancelledservices.php";
            </script>';
           
        }
        

}

if(isset($_POST['labourUpdate']))
{
    $name=$_POST['name'];
    $name_service_seeker=$_POST['name_service_seeker'];
    $service_category=$_POST['service_category'];
    $service_sub_category=$_POST['service_sub_category'];
    $cancelled_by=$_POST['cancelled_by'];
    $status=$_POST['status'];
  
    $token=$_GET['token'];
   
    $cityRef = $database->collection('cancelled_services')->document('Labour')->collection('labour')->document($token);
        $cityRef->update([
            ['path' => 'name', 'value' =>$name],
            ['path' => 'name service seeker', 'value' =>$name_service_seeker],
            ['path' => 'service category', 'value' =>$service_category],
            ['path' => 'service sub category', 'value' =>$service_sub_category],
            ['path' => 'cancelled by', 'value' =>$cancelled_by],
            ['path' => 'status', 'value' =>$status]
        ]);
        if($cityRef)
        {
            echo '<script type="text/javascript">alert("Data Update Successfully");
            window.location.href="cancelledservices.php";
            </script>';
            
        }
        else
        {
            echo '<script type="text/javascript">alert("Data Not Update ");
            window.location.href="cancelledservices.php";
            </script>';
           
        }
        

}
?>