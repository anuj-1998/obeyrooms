<?php include'function\function.php';?>
<!doctype html>
<html lang="en">
  <head>

    <style type="">@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Raleway:ital@1&display=swap');

*{

  box-sizing: border-box;
  font-family: poppins;
}
      
      ul{
  display: flex;
  list-style: none;
  float: right;

}

#log{display: flex;font-family: POPPINS;
  
    font-size: 1rem;
    font-weight: 600;
    font-style: normal;
    text-align: initial;
    height: auto;
    letter-spacing: 0.05rem;
    position: relative;
    bottom: auto;
    top: auto;
    width: auto;
    cursor: pointer;
    opacity: 1;
    transform: none;
    padding: 0rem;
    margin: 0px;
    overflow: initial;
    background: none;
}
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Obey rooms</title>

  </head>
  <body >
    <div style="position: fixed;top: 0;background: white;width: 100%">
    <div  style="box-shadow:0 5px 10px #efefef;margin: 10px;">

      <div class="container">


       <img src="images/logo.png" style="height: 60px;width: 60px;">



      <ul>
        <div style="padding-right: 70px;padding-top: 10px; display: flex;">
        <input type="search" name="" style="width: 430px; height: 40px;">
        <button type="submit" style="height: 40px;width: 40px"></button>
      </div>
        <li style="margin-top: 10px;padding-right: 60px;">
          <a href=""><img src="images/wa.png" style="width: 40px;height: auto;"></a>
        </li>

        <li id="log"style="margin-top: 15px;padding-right: 20px;">
          <a style="text-decoration: none;color: rgb(0, 174, 239)!important;" href="#">LOGIN/SIGNUP</a>
        </li>

      </ul>



      </div>



    </div>
    </div>

<div class="container">
<div class="breadcrumb">
  <a style="font-size: 13px;" href="#">Home</a> ><span style="font-size: 14px;" >Rooms In prayagraj</span></div></div>

<div style="background-color: rgb(247, 247, 247);padding: 10px;">
<div class="container">

  <p style="font-weight: bold;font-size: 1.5rem;margin-top: 20px;">Accommodation in Prayagraj</p> 
  <p style="font-size: 14px;">Relish an enjoyable stay filled with love, laughter, and cheer as OBEY brings for you an incredible range of accommodations in Prayagraj. Apart from offering top-notch services which include spacious rooms & Services we also ensure to light up your spirit,</p>

</div>
</div>


<div class=row>

<?php rooms();?>



  
</div>
<?php include'Include/Footer.php' ; ?>



</body>
</html>