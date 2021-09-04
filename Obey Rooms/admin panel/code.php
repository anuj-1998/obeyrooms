

<?php
if(isset($_POST['submit'])){
$conn=mysqli_connect("localhost","root","","admin panel") or die("Connection Failed : ".mysqli_connect_error());
$first_name= mysqli_real_escape_string($conn,$_POST['first_name']);
$last_name= mysqli_real_escape_string($conn,$_POST['Last_name']);
$email= mysqli_real_escape_string($conn,$_POST['email']);
$password= mysqli_real_escape_string($conn,md5($_POST['password']));
$cpassword= mysqli_real_escape_string($conn,md5($_POST['cpassword']));



$emailquery= "select * from register where email='$email'";

$query = mysqli_query($conn,$emailquery);

$emailcount = mysqli_num_rows($query);

if($emailcount>0){

  echo "email already exist";
}

else {if ($password===$cpassword) {


  $sql= "INSERT INTO register (first_name,last_name,email,password,cpassword)
  values('{$first_name}','{$last_name}','{$email}','{$password}','{$cpassword}')";

 
  if ($iquery= mysqli_query($conn,$sql)) {
   header("Location: login.php");;
    # code...
  }
  # code...

else{
  echo "<script>alert('password does not match')</script>";
  # code...
}

}
}}
 ?>

