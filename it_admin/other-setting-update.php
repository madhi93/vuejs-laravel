<?php 
include 'include/db.php';
$id=$_REQUEST['id'];
$gst=$_REQUEST['gst'];
$cancelvalue=$_REQUEST['cancelvalue'];
$nearbyd=$_REQUEST['nearbyd'];
$nearbym=$_REQUEST['nearbym'];
$silver=$_REQUEST['silver'];
$gold=$_REQUEST['gold'];
$platinum=$_REQUEST['platinum'];
$time=$_REQUEST['time'];

switch ($id) {
    case 1:
        $database->collection('G_setting')->document('setting')->update([['path'=>'gst_other_tax','value'=>$gst]]);
        echo "GST updated";    
    break;
    case 2:
        $database->collection('G_setting')->document('setting')->update([['path'=>'cancellation_charge','value'=>$cancelvalue]]);
        echo "Cancellation charges updated";     
    break;
    case 3:
        $database->collection('G_setting')->document('setting')->update([['path'=>'nearby_radius.daily','value'=>$nearbyd]]);    
        echo "Nearby radius daily updated";     
    break;
    case 4:
        $database->collection('G_setting')->document('setting')->update([['path'=>'nearby_radius.monthly','value'=>$nearbym]]);
        echo "Nearby radius monthly updated";     
    break;
    case 5:
        $database->collection('G_setting')->document('setting')->update([['path'=>'membership_charges.silver','value'=>$silver]]);
        echo "Membership charges silver updated"; 
        break;
    case 6:
        $database->collection('G_setting')->document('setting')->update([['path'=>'membership_charges.gold','value'=>$gold]]);
       echo "Membership charges gold updated";
        break;
    case 7:
        $database->collection('G_setting')->document('setting')->update([['path'=>'membership_charges.platinum','value'=>$platinum]]);
       echo "Membership charges platinum updated";
        break;
    case 8:
        $database->collection('G_setting')->document('setting')->update([['path'=>'time_limit_for_accept_offer','value'=>$time]]);
       echo "Time limit for accepting offers updated";
        break;
}

?>