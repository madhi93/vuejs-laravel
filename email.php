<?php include 'header.php'; 
       include 'include/db.php';
?>

<?php 

$emails=$database->collection("email")->document("custom-emails")->snapshot()->data();

?>
<label class="btn btn-outline-success col-md-12" disabled id="response">You can simply edit mail content with just clicking on it.</label>
<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Welcome Note</strong>
        </div>
        <div class="card-body">
            <p class="card-text" id="1"contenteditable="true" onblur="change_data(1)"><?php echo $emails['welcome_note']; ?></p>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Job Post</strong>
        </div>
        <div class="card-body">
            <p class="card-text" id="2" contenteditable="true" onblur="change_data(2)"><?php echo $emails['job_post']; ?></p>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Worker confirmation</strong>
        </div>
        <div class="card-body">
            <p class="card-text" id="3" contenteditable="true" onblur="change_data(3)"><?php echo $emails['worker_confirmation']; ?></p>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Worker assignment</strong>
        </div>
        <div class="card-body">
            <p class="card-text" id="4" contenteditable="true" onblur="change_data(4)"><?php echo $emails['worker_assignment']; ?> </p>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Invoice</strong>
        </div>
        <div class="card-body">
            <p class="card-text" id="5" contenteditable="true" onblur="change_data(5)"><?php echo $emails['invoice']; ?></p>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>