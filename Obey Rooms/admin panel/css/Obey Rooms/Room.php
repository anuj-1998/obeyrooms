<?php
session_start();

if (!isset($_SESSION['email'])) {

  header("Location:login.php");
  # code...
}

?><?php include'function\function.php';?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/rooms.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Obey rooms</title>

  </head>
  <body >


<!---------------top--------------->
<div class="world" >
  <nav class="navbar navbar-style navbar-fixed-top">
    <div class="container">
      <div class="navbar-header ">

        
        <a href=""><img id=logo src="images/logo.png" ></a>
      </div>

<form>
  <input  style="background-color: rgb(247, 247, 247);" class="baba" type="text" name="search" placeholder="Search..">
</form>
<div style="margin-left: 20px;">
<a href=""><img src="images/wa.png" style="width: 40px;height: auto;"></a>
</div>

   <div id="log">
    
    <?php if (!isset($_SESSION['email'])){
      echo "<a style='text-decoration: none;color: rgb(0, 174, 239)!important;'' href='user_registration.php'>Login/signup</a>";
    } else{echo "<a style='text-decoration: none;color: rgb(0, 174, 239)!important;'' href='Logout.php'>Logout</a>";}
      ?>
      
    
     
   </div>
</div>
</nav>
</div>



<div id="okja"  class="container" style="margin: 10px; display: flex;">
<input type="search" placeholder=" Search your locality" name="" style="width: 90%;border: none;  background-color: rgb(247, 247, 247);;outline: none;height: 40px;">
<button class="btn-primary" style="height: 40px;width: 50px; border: none;"><i class="fa fa-search"></i></button>
</div>


<div class="container">
<div class="breadcrumb" style="margin-top: 40px;">

  <a style="font-size: 13px;" href="#">Home</a> ><span style="font-size: 14px;" >Rooms In prayagraj</span></div></div>

<div style="background-color: rgb(247, 247, 247);padding: 10px;">
<div class="container">

  <p style="font-weight: bold;font-size: 1.5rem;margin-top: 20px;">Accommodation in Prayagraj</p> 
  <p style="font-size: 14px;">Relish an enjoyable stay filled with love, laughter, and cheer as OBEY brings for you an incredible range of accommodations in Prayagraj. Apart from offering top-notch services which include spacious rooms & Services we also ensure to light up your spirit,</p>

</div>
</div>


<div class=row>

<?php rooms();   ?>



  
</div>
<?php include'Include/Footer.php' ; ?>



</body>



</html>