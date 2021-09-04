
<?php

session_start();


?>


<?php
if(isset($_POST['submit'])){
$conn=mysqli_connect("localhost","root","","obey rooms") or die("Connection Failed : ".mysqli_connect_error());


$time= mysqli_real_escape_string($conn,$_POST['time']);
 

$product= mysqli_real_escape_string($conn,$_POST['product']);
 
$username=$_SESSION['email'];




$date1 =mysqli_real_escape_string($conn, strtr($_REQUEST['date'], '/', '-'));


$new_date = date('Y-m-d',strtotime($date1));

  $sql= "INSERT INTO visit (D,T,email,product_id)
  values('{$new_date}','{$time}','{$username}','{$product}')";

 
  if ($iquery= mysqli_query($conn,$sql)){
    
     header("Location: thanking .php");
   } 



 ?>

  
<?php



$to_email = "$username";
$subject = "Obey-Rooms";
$body = "welcome to owe willl meeet you :) ";
$headers = "From: obeyrooms@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "";
} else {
    echo "Email sending failed...";
}
  # code...
}
?>