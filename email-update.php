<?php 
include 'include/db.php';
$id=$_REQUEST['id'];
$value=$_REQUEST['value'];

switch ($id) {
    case 1:
        $database->collection('email')->document('custom-emails')->update([['path'=>'welcome_note','value'=>$value]]);
        echo "Welcome note mail updated successfully !";
        break;
    case 2:
        $database->collection('email')->document('custom-emails')->update([['path'=>'job_post','value'=>$value]]);
        echo "Job post mail updated successfully !";
        break;
    case 3:
        $database->collection('email')->document('custom-emails')->update([['path'=>'worker_confirmation','value'=>$value]]);
        echo "Worker confirmation mail updated successfully !";
        break;
    case 4:
        $database->collection('email')->document('custom-emails')->update([['path'=>'worker_assignment','value'=>$value]]);
        echo "Worker assignment mail updated successfully !";
        break;
    case 5:
        $database->collection('email')->document('custom-emails')->update([['path'=>'invoice','value'=>$value]]);
        echo "Invoice mail updated Successfully !";
        break;
}

?>