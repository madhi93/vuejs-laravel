<?php include 'header.php';

include 'include/db.php';
$row = $database->collection('Quest_ans')->documents();
?>

<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <strong class="card-title">Question and Answer</strong>
    </div>
    <div class="card-body">
      <table id="bootstrap-data-table1" class="col-sm-12 table  table-bordered table-responsive-lg">
        <thead class="thead-dark">
          <tr>

            <th scope="col">phone number </th>
            <th scope="col">Answer 1</th>
            <th scope="col">Answer 2</th>
            <th scope="col">Answer 3</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($row as $admin) { ?>
            <tr>
              <td><?php echo $admin->id();?></td>
              <td><audio controls style="width:250px;">
                  <source src="<?php echo $admin['answer 1']; ?>" type="audio/mpeg"></audio></td>
              <td><audio controls style="width:250px;">
                  <source src="<?php echo $admin['answer 2']; ?>" type="audio/mpeg"></audio></td>
              <td><audio controls style="width:250px;">
                  <source src="<?php echo $admin['answer 3']; ?>" type="audio/mpeg"></audio></td>

            </tr>

          <?php } ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

<?php include 'footer.php'; ?>