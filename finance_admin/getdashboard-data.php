<?php 
include 'include/db.php';
$for = $_REQUEST['for'];
$value = $_REQUEST['value'];


if($for=='state')
{
    $customer=0;
    $labour=0;
    $data=$database->collection("service_provider")->where('state', '=', $value)->documents();
    foreach($data as $d)
    {
        $customer++;
    }
    echo $labour." ";
    echo $customer;
}else if ($for=='gender'){
    $customer=0;
    $labour=0;
    $c1=$database->collection("service_provider")->where('gender', '=', $value)->documents();
    $c2=$database->collection("service_seeker")->where('gender','=',$value)->documents();
    foreach($c1 as $c)
        $customer++;
    foreach($c2 as $c)
        $labour++;
    echo $labour." ";
    echo $customer;
}
else if ($for =='age'){

}
else if ($for=='membership')
{

}
?>