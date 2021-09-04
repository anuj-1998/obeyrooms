
<


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

 
<body class="ok" >

      <div class="silver" >
  <div class="container">
<div class="create">

  <h3 class="account">Recover your Password</H3>
    Please Enter password correctly
    <span><i class="fa fa-smile-o" aria-hidden="true"></i></span>


</div>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">


<input class="input" type="text" name="email" placeholder="email" required>


<input class="input" type="text" name="password" placeholder="New-password" required>


<input class="input" type="text" name="cpassword" placeholder="Confirm-password" required>




<button type="submit" name="submit" class="button">Update Password</button>
</form>

</form>

<hr>
<div>Have an account with us? <a href="login.php">Log in</a></div>
</div>
</div>



  </body>

  </html>
    
  
    <?php
session_start();
if(isset($_POST['submit'])){
$conn=mysqli_connect("localhost","root","","obey rooms") or die("Connection Failed : ".mysqli_connect_error());


$contact = $_POST['email'];
        $password = $_POST['password'];
        $newpassword = $_POST['cpassword'];
      
        $result = mysqli_query("SELECT * FROM registration WHERE email='$contact'");
        if(!$result)
        {
        echo "The phone you entered does not exist";
        }
        else if($password!= mysql_result($result, 0))
        {
        echo "You entered an incorrect password";
        }
        if($newpassword=$password)
        $sql=mysqli_query("UPDATE registration SET password='$newpassword' || cpassword=$password where 

email='$contact'");
        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "Passwords do not match";
       }
     }
      ?>