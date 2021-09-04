
<?php

session_start();


?>

<!doctype html>

<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css\Registration.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>signup </title>

  </head>


<?php
if(isset($_POST['submit'])){
$conn=mysqli_connect("localhost","root","","obey rooms") or die("Connection Failed : ".mysqli_connect_error());



if($_SERVER['REQUEST_METHOD'] == "POST")


 //Username and Password sent from Form
 $username = mysqli_real_escape_string($conn, $_POST['email']);
 $password = mysqli_real_escape_string($conn, $_POST['password']);
 $password = md5($password);
 $sql = "SELECT * FROM registration WHERE email='$username' AND '$password'";
 $query = mysqli_query($conn, $sql);
 $res=mysqli_num_rows($query);
 

 //If result match $username and $password Table row must be 1 row
 if($res == 1)
 {

  $_SESSION['email']=$username;
 header("Location: room.php");
 }
 else
 {
 echo "Invalid Username or Password";
 }
}
?>



<body class="ok" >

      <div class="silver" >
  <div class="container">
<div class="create">

  <h3 class="account">Log In</H3>
    To find the better Living space 
    <span><i class="fa fa-smile-o" aria-hidden="true"></i></span>


</div>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
<div>
  <div class="fb">
  
    <i class="fa fa-facebook">  Sign Up with Facebook</i>

  </div>
   
    <div class="google">
      
      <i class="fa fa-google"  onclick="window.location = '<?php echo $loginURL ?>';" aria-hidden="true">  Sign Up with Google</i>


    </div>
</div>



<input  class="input" type="text" name="email" placeholder="Enter email" required>

<input  class="input"  type="text" name="password" placeholder="Enter password" required>

<button type="submit" name="submit" class="button">Log in</button>
</form>

<div class="agree"><a href="#">forgot password ? </a>
</div>

<hr>
<div>Don't have an account with us? <a href="user_registration.php"> Sign up</a></div>
</div>
</div>



  </body>

  </html>