

<?php
include 'include/db.php';
$id=$_REQUEST['id'];
$d1 = $_REQUEST['d1'];
$d1_5 = $_REQUEST['d1_5'];
$d5_20 = $_REQUEST['d5_20'];
$d20 = $_REQUEST['d20'];
$m=$_REQUEST['m'];
try{
    if($id=='d')
    {
    $database->collection('G_setting')->document('setting')->update([
        ['path'=>'daily_hire.1','value'=>$d1],
        ['path'=>'daily_hire.1-5','value'=>$d1_5],
        ['path'=>'daily_hire.5-20','value'=>$d5_20],
        ['path'=>'daily_hire.>20','value'=>$d20]
        ]);
    echo "Daily Hire Commision updated !";
    }
    else 
    {
        $database->collection('G_setting')->document('setting')->update([['path'=>'monthly_hire.per_worker','value'=>$m]]);
        echo "Monthly hire commision updated !";
    }
}catch(Exception $e)
{
    echo "Error:".$e;
}
?>