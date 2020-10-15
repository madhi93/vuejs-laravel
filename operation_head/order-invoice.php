<?php
include 'header.php';
include 'include/db.php';
$row=$database->collection('orders_and_invoices')->documents();
?>
<div class="col-12">
    <div class="form-group col-4">
      <label for="">Month</label>
      <select class="form-control" name="month" id="">
        <option>Jan</option>
        <option>Feb</option>
        <option>Mar</option>
      </select>
    </div>
    <div class="form-group col-4">
      <label for="">State</label>
      <select class="form-control" name="state" id="">
        <option>Jan</option>
        <option>Feb</option>
        <option>Mar</option>
      </select>
    </div>
    <div class="form-group col-4">
      <label for="">Contractor</label>
      <select class="form-control" name="contractor" id="">
        <option>ABC</option>
        <option>DEF</option>
        <option>GHI</option>
      </select>
    </div>
</div>
<?php foreach($row as $d){ ?>
<div class="col-md-4">
    <table class="table border border-warning">
        <thead class="thead-inverse">
            <tr>
                <th colspan="2">
                    <h6>Customer Name : <?php echo $d['name']; ?></h6>
                    <small>Email: <b><?php echo $d['email']; ?></b></small>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Per Day Cost: </td>
                <td>xx Rs.</td>
            </tr>
            <tr>
                <td>Per Hour Cost:</td>
                <td>xx Rs.</td>
            </tr>
            <tr>
                <td>Per Worker Cost:</td>
                <td><?php echo $d['per worker cost']; ?> Rs.</td>
            </tr>
            <tr>
                <td>Service Duration:</td>
                <td><?php echo $d['service duration']; ?></td>
            </tr>
            <tr>
                <td>Convenience fees:</td>
                <td><?php echo $d['convenience fees']; ?> Rs.</td>
            </tr>
            <tr>
                <td>GST:</td>
                <td><?php echo $d['GST']; ?> Rs.</td>
            </tr>
            <tr>
                <td>Total worker hired:</td>
                <td><?php echo $d['Total worker hired']; ?></td>
            </tr>
            <tr>
                <td class="text-center" colspan="2">
                    Total amount: <b>
                    <?php echo ($d['Total worker hired']*$d['per worker cost'])+$d['convenience fees']+ $d['GST']; ?>    
                    Rs</b> <hr>
                    <small class="float-sm-right">
                        OOII Invoice no:<?php echo $d['ID']; ?><br>
                        Date:<?php echo $d['date']; ?>
                    </small>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php
}
include 'footer.php';
?>