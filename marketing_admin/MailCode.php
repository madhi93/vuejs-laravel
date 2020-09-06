<?php
session_start();
error_reporting(0);
$sid=$_SESSION['sid'];
include 'include/db.php';
$inv = $database->collection('orders_and_invoices')->document($sid)->snapshot()->data();
$name=$inv['name'];
$ID=$inv['ID'];
$date=$inv['date'];
$woker_hired=$inv['total_worker_hired'];
$per_worker_cost=$inv['per_worker_cost'];
$GST=$inv['GST'];
$Con_fees=$inv['convenience_fees'];
$total=$woker_hired * $per_worker_cost + $GST + $Con_fees;
$email=$inv['email'];



$email_to=$email;
$subject="Invoice";

$headers="From: xyz demo <demo@gmail.com>\r\n";
$headers.="MIME-Version:1.0\r\n";
$headers.="Content-Type:text/html/; charset=ISO-8859-1\r\n";


$message="
   
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>Example 1</title>
    <link rel=\"stylesheet\" href=\"style.css\" media=\"all\" />
	
  </head>
  <body>
    <header class=\"clearfix\">
      <div id=\"logo\">
        <img src=\"logo.png\">
      </div>
      <h1>INVOICE</h1>
      
      <div id=\"project\">
     
        <div><span>Name</span>$name</div>
		<div><span>EMAIL</span>$email</div>
        <div><span>DATE</span>$date<div>
        
      </div>
    </header>
	<hr>
	
    <main>
      <table>
        <thead>
          <tr>
            <th class=\"service\">Name</th>
            <th class=\"service\">ID</th>
			<th class=\"servic1e\">Date</th>
            <th class=\"service\">GST</th>
			<th class=\"service\">Total</th>
           
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"service\">$name</td>
            <td class=\"service\">$ID</td>
			<td class=\"service\">$date</td>
            <td class=\"service\">$GST</td>
			<td class=\"service\">$total</td> 
          </tr>
         
         
        </tbody>
      </table>
      
    </main>
    <footer>
      
    </footer>
  </body>
</html>
";

// echo $message;
if(mail($email_to,$subject,$message,$headers))
{
    echo '<script type="text/javascript">alert("Mail Send Successfully");
    window.location.href="invoice.php";
    </script>';
    
}
else
{
    echo '<script type="text/javascript">alert("Mail Not Send");
    window.location.href="invoice.php";
    </script>';
}
?>