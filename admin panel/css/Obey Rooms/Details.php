<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/Details.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />



<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      
      <!-- Javascript -->
      <script>
         $(function() {
            $( "#datepicker-13" ).datepicker();
            $( "#datepicker-13" ).datepicker("show");
         });
      </script>
   </head>
   
   </head>
   
    <title>Details</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  
<!---------------top--------------->
<div class="world" >
  <nav class="navbar navbar-style">
    <div class="container">
      <div class="navbar-header">

        
        <a href=""><img id=logo src="images/logo.png" ></a>
      </div>

<form>
  <input  style="background-color: rgb(247, 247, 247);" class="baba" type="text" name="search" placeholder="Search..">
</form>
<div style="margin-left: 20px;">
<a href=""><img src="images/wa.png" style="width: 40px;height: auto;"></a>
</div>

   <div id="log">
    <a style="text-decoration: none;color: rgb(0, 174, 239)!important;" href="#">LOGIN/SIGNUP</a>
     
   </div>
</div>
</nav>
</div>



<div id="okja"  class="container" style="margin: 10px; display: flex;">
<input type="search" placeholder=" Search your locality" name="" style="width: 90%;border: none;  background-color: rgb(247, 247, 247);;outline: none;height: 40px;">
<button class="btn-primary" style="height: 40px;width: 50px; border: none;"><i class="fa fa-search"></i></button>
</div>



<div >

<div class="container">

  <div class="breadcrumb"><a  style="font-size: 13px;" href="#">Home</a> ><span style="font-size: 14px;">Rooms In prayagraj</span></div>
 
</div>
</div>





<?php
                       $db= mysqli_connect("localhost","root","","obey rooms");

                        $post_id = $_GET['id'];

                        $sql = "SELECT *from rooms
                        WHERE room_id = {$post_id}";

                        $result = mysqli_query($db, $sql) or die("Query Failed.");
                        if(mysqli_num_rows($result) > 0){
                          while($row = mysqli_fetch_assoc($result)) {
                      ?>

<div class="row">
  <div class="col-md-8">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="height: auto;"  src="Admin_area/room_images/<?php echo $row['room_img1']; ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100"style="height: auto;" src="Admin_area/room_images/<?php echo $row['room_img2']; ?>"alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100"style="height: auto;" src="Admin_area/room_images/<?php echo $row['room_img3']; ?>"alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<div class="col-md-4" style="background-image: url(images/detailbg.png); background-attachment: fixed;background-origin: center;background-repeat:repeat;">



<span><i class="fa fa-heart" style="float: right;font-size: 25px;margin-top: 60px;margin-right: 10px;  opacity: 0.5"></i></span>
  
<div style="margin-top: 50px;">
<h3 style="font-weight: 900"><?php echo $row['room_title']; ?></h3>
<p>213/6 mutthiganj prayagraj</p>
</div>
<hr>
<h5 style="margin-top: 30px; font-weight: 800">Rent - <?php echo $row['room_rent']; ?>/M</h5>
<hr>

<p style="margin-top: 30px; ">About the property</p>

<h6 style="margin-top: 20px;letter-spacing: 2px;"><?php echo $row['room_desc']; ?>"</h6>


<a href="#ex1" rel="modal:open"><button type="button" class="btn btn-primary " style="padding: 20px 60px 20px 60px; margin-left: 55px;margin-top: 10px;" >SCHEDULE FREE VISIT</button></a>
<button type="button" class="btn btn-success"style="padding: 20px 107px 20px 60px; margin-left: 55px;margin-top: 15px;">WHATSAPP    <i class="fa fa-whatsapp"></i></button>

</div>
</div>

<div class="row" style=";background-image: url(images/okbg.png);background-attachment: fixed;background-position: right;background-repeat: no-repeat; ">
<div class="col-md-6">
<h3 style="margin-left: 50px;margin-top: 50px;">Important Information</h3>
<hr>
<br><br>

<p style="margin-left: 30px;">-Non veg. food not allowed in this property<br><br>
-electricity charges will be taken accrding to your MU(meter-unit).<br><br>
- 1 Month Security to be deposited<br><br>
- KYC would be done while ROOM shifting </p>
</div>
<div class="col-md-6">
<br>
<br>
<h3 style="margin-left: 50px;">Amenities</h3>

<hr>
<br>
<p style="margin-left: 30px;">-No amenities available  <i class="fa fa-frown-o" aria-hidden="true"></i></p>
<!-- AddToAny BEGIN -->
<br>
<br>

<img id="ok" style="width: 40px;height: auto; margin: 20px;" src="images/share.png" ><span>SHARE -</span>

<div id="share">
<div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-title="obeyrooms" >
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_linkedin"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
</div>
<!-- AddToAny END -->
</div>
</div>


<div class="row" style="margin-top: 50px;">
  <div class="col-md-3">
    <h2 class="Similar" style="text-align: center;" >Similar properties</h2>
    
  </div>
  <div class="col-md-3">
    <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Obey 2</h4>
            <p class="card-text">Allapur</p>

            <p class="card-text">Price $35$</p>
              <hr>
            <a class="btn btn-primary">schedule visit</a>
          </div>
        </div>
    
  </div>
  <div class="col-md-3">
    <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Obey 2</h4>
            <p class="card-text">Allapur</p>

            <p class="card-text">Price $35$</p>
              <hr>
            <a class="btn btn-primary">schedule visit</a>
          </div>
        </div>
    
  </div>
  <div class="col-md-3">
    <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Obey 2</h4>
            <p class="card-text">Allapur</p>

            <p class="card-text">Price $35$</p>
              <hr>
            <a class="btn btn-primary">schedule visit</a>
          </div>
        </div>
    
  </div>
</div>

  <?php
                          }
                        }else{
                          echo "<h2>No Record Found.</h2>";
                        }

                        ?>
<?php include'Include/Footer.php' ; ?>






<div id="ex1" class="modal" style=";background-image: url(images/okbg.png);background-attachment: fixed;background-position: right;">
  <h3 style="text-align: center;font-weight: bold;">Schedule a visit</h3>
  <p style="text-align: center;color: grey;">We'll share your visit details over Call & Whatsapp</p>

  <form style="text-align: center;">

    <input type="date" name="" id = "datepickerk-13" placeholder="Enter Date" style="padding-left: 10px;"><br><br>
     <input type="time" name="" placeholder="enter time" style="margin-top: 10px;padding-left: 65px;padding-right: 58px;">

  </form>
<div class="justify-content-center" style="text-align: center;">
<button type="button" class="btn btn-success btn-lg" style="margin-top: 30px;text-align: center;margin-right: 30px;">Submit</button></div>
 
  <a href="#" rel="modal:close">Close</a>
</div>

<!-- Link to open the modal -->
<p></p>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#ok").click(function(){
    $("#share").toggle();
  });
});
</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>