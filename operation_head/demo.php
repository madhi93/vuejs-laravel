<?php include 'header.php' ; ?>
<?php
include 'include/db.php';


?>



<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
</head>
<body>
	<form action="demo_insert.php" method="POST">
		<button type="submit" name="demo">Submit</button>

		
	</form>




	<div class="col-lg-8">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"><h2>Currently Used Language </h2></strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">S No.</th>
                        <th scope="col">Language</th>
                       
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody> 

                <?php
                	$datas =$database->collection("language")->document("m_gender")->snapshot()->data();
                $i=0;
                ksort($datas);
                 $j=0;
                foreach($datas as $index => $value) { 
                 
                $i++;
               

?> 
                               
                    <tr><?php echo $j;?>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $value; ?></td> 
                
                        <td>
                            <form action="demo_delete.php" method="POST">
                               
                        <input type="hidden" name="ref_t_delete" value="<?php echo $index ?>">

                        <button type="submit" name="demo_delete" class="btn text-danger"><i class="fa fa-trash"></i></button>
                    </form>
                       
                        </td>
                        
                    <?php
                       } ?>

                       
                        
                    </tr>
                        
                </tbody>

            </table>
               
        </div>
    </div>
    
</div>



</body>


</html>
<?php include 'footer.php' ; ?>