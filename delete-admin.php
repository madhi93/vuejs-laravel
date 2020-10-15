<?php 
include 'include/db.php';
$role=$_REQUEST['role'];
$id=$_REQUEST['id'];
switch($role)
{
    case 'oh':$database->collection('Admins')->document('Operation Head')->collection('admin')->document($id)->delete(); break;
    case 'ma':$database->collection('Admins')->document('Marketing Admin')->collection('admin')->document($id)->delete(); break;
    case 'fa':$database->collection('Admins')->document('Finance Admin')->collection('admin')->document($id)->delete(); break;
    case 'it':$database->collection('Admins')->document('IT Admin')->collection('admin')->document($id)->delete(); break;
}
echo "Record deleted successfully !";
echo "<script>window.location='admins.php';</script>";
?>