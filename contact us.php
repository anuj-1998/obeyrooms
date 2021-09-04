<!doctype html>

<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css\Contact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>signup </title>

  </head>
  <img src="images/logo11.png" style="width: 60px;height: 60px;margin-left: 40px;margin-top: 40px;">
<body style="background-image: url(https://www.agdelta.com/wp-content/uploads/2018/06/contact-us-bg-3-C.jpg);background-attachment: ixed;">


  <div class="container">
  <div style="text-align:center">
    <h2 style="color: white;font-weight: 900;">Contact Us</h2>
    <p  style="color: white;font-weight: 800;">Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row"style="text-align:center;justify-content: center;">
    
    <div class="column">
      <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
        <label style="color: white" for="fname">First Name</label>
        <input type="text" id="fname" name="full_name" placeholder="Your name..">

        <label style="color: white" for="lname">E-mail</label>
        <input type="text" id="lname" name="email" placeholder="Your Email..">


        <label style="color: white" for="contact">Phone no.</label>
        <input type="text" id="fname" name="contact" placeholder="Your contact no.">
        
        
        <label style="color: white" for="subject">Subject</label>

        <textarea id="subject" name="massage" placeholder="Write something.." style="height:170px"></textarea>
        <input style="background-color: cyan;color: black" type="submit"name="submit" value="Submit">
      </form>
    </div>
  </div>
</div>




<?php
if(isset($_POST['submit'])){
$conn=mysqli_connect("localhost","root","","obey rooms") or die("Connection Failed : ".mysqli_connect_error());


$first_name= mysqli_real_escape_string($conn,$_POST['full_name']);

$email= mysqli_real_escape_string($conn,$_POST['email']);

$contact= mysqli_real_escape_string($conn,$_POST['contact']);

$massage= mysqli_real_escape_string($conn,$_POST['massage']);



 


  $sql= "INSERT INTO  contact (full_name,email,contact,massage)
  values('{$first_name}','{$email}','{$contact}','{$massage}')";

  if(mysqli_query($conn, $sql)){
    header("location: thanking .php");
  }else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
  }


 ?>

  
<?php



$to_email = "$email";
$subject = "Obey-Rooms";
$body = "welcome toggggggggggggggggggget you :) ";
$headers = "From: obeyrooms@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "";
} else {
    echo "Email sending failed...";
}
  # code...
}
?>


</body>
</html>