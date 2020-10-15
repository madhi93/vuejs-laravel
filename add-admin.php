<?php include 'include/db.php';

$role=$_REQUEST['role'];
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$password=$_REQUEST['cpassword'];

$data=[
  'first_name'=>$fname,
  'last_name'=>$lname,
  'email'=> $email
];

$database->collection('Admins')->document($role)->collection('admin')->add($data);
echo "Mail sent successfully !";
echo "<script>window.location='admins.php';</script>";
//mail("vishalsurgade4@gmail.com","My subject","fine vishal surgade ");
?>