
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


$first_name= mysqli_real_escape_string($conn,$_POST['first_name']);
$last_name= mysqli_real_escape_string($conn,$_POST['last_name']);
$email= mysqli_real_escape_string($conn,$_POST['email']);
$contact= mysqli_real_escape_string($conn,$_POST['contact']);
$password= mysqli_real_escape_string($conn,md5($_POST['password']));
$cpassword= mysqli_real_escape_string($conn,md5($_POST['cpassword']));




if (preg_match('/[^a-zA-Z\s]/', $first_name)) {

  echo "only Alphabets allowed";
  # code...
};

if (preg_match('/[^a-zA-Z\s]/', $last_name)) {

  echo "only Alphabets allowed";
  # code...
};

if (filter_var($email,FILTER_VALIDATE_EMAIL)) {

  echo "";
  # code...
}else {
  echo("$email is not a valid email address");
};

if (strlen($contact)>10 || strlen($contact)<10) 
{
  echo "Invalid contact";
}
 ;

 

        







$emailquery= "select * from registration where email='$email'";
$query = mysqli_query($conn,$emailquery);

$emailcount = mysqli_num_rows($query);
if($emailcount>0){
  echo "email already exist";
}

else {if ($password===$cpassword) {



  $sql= "INSERT INTO registration (first_name,last_name,email,contact ,password,cpassword)
  values('{$first_name}','{$last_name}','{$email}','{$contact}','{$password}','{$cpassword}')";

 
  if ($iquery= mysqli_query($conn,$sql)) {
    echo  "<script>alert('Login successful')</script>";
    # code...
  }
  # code...
}
else{
  echo "<script>alert('password does not match')</script>";
  # code...
}
}



 ?>

  
<?php



$to_email = "$email";
$subject = "Obey-Rooms";
$body = "welcome to obeyrooms REGISTRATION successfully :)";
$headers = "From: obeyrooms@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "";
} else {
    echo "Email sending failed...";
}
  # code...
}
?>



<body class="ok" >

      <div class="silver" >
  <div class="container">
<div class="create">

  <h3 class="account">Create Account</H3>
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


<div  class="password1">

<input class="first_name" class="form-control" type="text" name="first_name" placeholder="First name" required>

<input class="first_name"  type="text" name="last_name" placeholder="Last name" required>

</div>


<input class="input" type="text" name="email" placeholder="E-mail" required>

<input class="input" type="text" name="contact" placeholder="contact" required>


<div  class="password1">


<input  class="input1" type="text" name="password" placeholder="password" required>

<input  class="input1"  type="text" name="cpassword" placeholder="confirm-password" required>

</div>


<button type="submit" name="submit" class="button">SIGN UP</button>
</form>

<div class="agree">By signing up, I agree to OBEY ROOM'S
  
  <a href="">Terms of Use</a><br> and <a href=""> Privacy Policy</a>.

</div>

<hr>
<div>Have an account with us? <a href="login.php"> Login</a></div>
</div>
</div>



  </body>

  </html>
    
  
    