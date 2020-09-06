<html>

<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

</html>
<?php
include 'include/db.php';
$id = $_REQUEST['id'];
try {
    $res = $database->collection('review')->document('service_seeker')->collection('review')->document($id)->delete();
    
} catch (Exception $e) {
    echo "<script>
    swal(
        'Deletion Failed !',
        'Review deletion failed due to some reasons !',
        'failed'
    );
    window.location='review.php';
    </script>";
}

?>