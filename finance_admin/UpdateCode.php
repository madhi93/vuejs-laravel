<?php
include 'include/db.php';
error_reporting(0);
if(isset($_POST['userupdate']))
{
    $name=$_POST['name'];
    // $phone_no=$_POST['phone_no'];
    $jobs=$_POST['jobs'];
    $hours_worked=$_POST['hours_worked'];
    $status=$_POST['status'];
  
    $token=$_GET['token'];
    // echo $token;
        $labour = $database->collection('service_provider')->document($token);
        $labour->update([
            ['path' => 'name', 'value' =>$name],
            // ['path' => 'phone_no', 'value' =>$phone_no],
            ['path' => 'jobs', 'value' =>$jobs],
            ['path' => 'hours_worked', 'value' =>$hours_worked],
            ['path' => 'status', 'value' =>$status]
        ]);
        if($labour)
        {
            echo '<script type="text/javascript">alert("Data Update Successfully");
            window.location.href="Users.php";
            </script>';
            // echo '<script>alert("Data Update Successfully")</script>'; 
            // header("Location: Users.php");
        }
        else
        {
            echo '<script type="text/javascript">alert("Data Not Update ");
            window.location.href="Users.php";
            </script>';
            // echo '<script>alert("Not Update Data")</script>'; 
            // header("Location: Users.php");
        }
        

}

if(isset($_POST['PaymentHistoryUpdate']))
{
    $name=$_POST['name'];
    $service_cat=$_POST['service_cat'];
    $service_sub_cat=$_POST['service_sub_cat'];
    $transaction_id=$_POST['transaction_id'];
    $payment_date=$_POST['payment_date'];
    $payment_amount=$_POST['payment_amount'];
  
    $token=$_GET['token'];
    // echo $token;
        $cityRef = $database->collection('payment_history')->document('service_seeker')->collection('ss_payment_history')->document($token);
       
        $cityRef->update([
            ['path' => 'name', 'value' =>$name],
            ['path' => 'service_cat', 'value' =>$service_cat],
            ['path' => 'service_sub_cat', 'value' =>$service_sub_cat],
            ['path' => 'transaction_id', 'value' =>$transaction_id],
            ['path' => 'payment_date', 'value' =>$payment_date],
            ['path' => 'payment_amount', 'value' =>$payment_amount]
        ]);
        if($cityRef)
        {
            echo '<script type="text/javascript">alert("Data Update Successfully");
            window.location.href="PaymentHistory.php";
            </script>';
            // echo '<script>alert("Data Update Successfully")</script>'; 
            // header("Location: PaymentHistory.php");
        }
        else
        {
            echo '<script type="text/javascript">alert("Data  Not Update ");
            window.location.href="PaymentHistory.php";
            </script>';
            // echo '<script>alert("Not Update Data")</script>'; 
            // header("Location: PaymentHistory.php");
        }
        

}

if(isset($_POST['send_comment']))
{
    $comment=$_POST['comment'];
    $token=$_GET['token'];
    // echo $token;
        $cityRef = $database->collection('contact_us')->document('service_provider')->collection('service_provider_contact')->document($token);
       
        $cityRef->update([
            ['path' => 'comment', 'value' =>$comment]
           
        ]);
        if($cityRef)
        {
            echo '<script type="text/javascript">alert("Comment Send Successfully");
            window.location.href="contactus.php";
            </script>';
            // echo '<script>alert("Data Update Successfully")</script>'; 
            // header("Location: contactus.php");
        }
        else
        {
            echo '<script type="text/javascript">alert("Comment Not Send ");
            window.location.href="contactus.php";
            </script>';
            // echo '<script>alert("Not Update Data")</script>'; 
            // header("Location: contactus.php");
        }
        

}
if(isset($_POST['seeker_send_comment']))
{
    $comment=$_POST['comment'];
    $token=$_GET['token'];
    // echo $token;
        $cityRef = $database->collection('contact_us')->document('service_seeker')->collection('service_seeker_contact')->document($token);
       
        $cityRef->update([
            ['path' => 'comment', 'value' =>$comment]
           
        ]);
        if($cityRef)
        {
            echo '<script type="text/javascript">alert("Comment Send Successfully");
            window.location.href="contactus.php";
            </script>';
            // echo '<script>alert("Data Update Successfully")</script>'; 
            // header("Location: contactus.php");
        }
        else
        {
            echo '<script type="text/javascript">alert("Comment Not Send ");
            window.location.href="contactus.php";
            </script>';
            // echo '<script>alert("Not Update Data")</script>'; 
            // header("Location: contactus.php");
        }
        

}



?>