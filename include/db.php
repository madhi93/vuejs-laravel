<?php 
require_once 'vendor/autoload.php';

use Google\Cloud\Firestore\FirestoreClient;

try{
    $database = new FirestoreClient(['projectId' => 'hirelocal-a2988']);

    echo "<script>alert('connection successful')</script>";

}catch(Exception $e)
{
    echo "<script>alert('You have an error ".$e." Please contact to the developer')</script>";
}

?>