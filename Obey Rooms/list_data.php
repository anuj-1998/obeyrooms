
<?php
if(isset($_POST['submit'])){
$conn=mysqli_connect("localhost","root","","obey rooms") or die("Connection Failed : ".mysqli_connect_error());

 $first_name = $_POST['full'];
   $last_name = $_POST['Address'];
   $city_name = $_POST['contact'];
   $email = $_POST['email'];
   $status = $_POST['status'];

   $sql = "INSERT INTO list_property (full_name,address,contact,email,status)
   VALUES ('$first_name','$last_name','$city_name','$email','$status')";
   if (mysqli_query($conn, $sql)) {
    
     header("Location: thanking .php");
   } 











$to_email = "$email";
$subject = "Obey-Rooms";
$body = "welcome to list:) ";
$headers = "From: obeyrooms@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "";
} else {
    echo "Email sending failed...";
}
  # code...

   mysqli_close($conn);
}




?>






