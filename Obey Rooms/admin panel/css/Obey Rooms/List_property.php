 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/List property.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Obey rooms</title>

  </head>





  <body >
<!---------------top--------------->
<div class="world" >
  <nav class="navbar navbar-style">
    <div class="container">
      <div class="navbar-header">

        
        <a href=""><img id=logo src="images/logo.png" ></a>
      </div>

   <div id="log">
    <a style="text-decoration: none;color: rgb(0, 174, 239)!important;" href="#">LOGIN/SIGNUP</a>
     
   </div>



</div>
</nav>
</div>



<div style="margin-top: 50px; font-weight: bold;" class="container"  >
	<h3>List your Property with OBEY!</h3>
	<h6>How's it work</h6>
</div>

<div class="container">


	<div class="row">


		<div class="col-md-6">

		<img src="images/partner.png" style="width: 100%;height: auto;" class="img-responsive">
		<hr>

		<h4 style="margin-top: 20px;">Benifits of renting with us</h4><br>
		
		<div class="row" style="margin-top: 20px; text-align: center;">

			<div class="col-md-4" style="border-right: 1px solid grey">
			<img src="images/pay.svg">
			<h6 style="margin-top: 13px;font-style:italic;">Timely Rent</h6>
		</div>
		<div class="col-md-4" style="border-right: 1px solid grey">
			<img src="images/pay2.svg">
			<h6 style="margin-top: 13px;font-style:italic;">Verified Tenant</h6>
		</div>
		<div class="col-md-4"style="border-right: 1px solid grey">
			<img src="images/pay3.svg">
			<h6 style="margin-top: 13px;font-style:italic;">Long Term Partnership</h6>
		</div>
		</div>
		</div>









		<div class="col-md-6" style="text-align: center;justify-content: center;background-image: url(images/okbg.png);background-attachment: fixed;">
		<h3 style="font-weight: 900">Interested ?</h3>
		<h6>Submit basic detail we will back to you<br>via call OR whatsapp</h6>


		<form method="POST" action="list_data.php">
			<div class="form-group">
 
  <input type="text" class="form-control" placeholder="Enter full name" name="full" >
</div>
<div class="form-group">
  <input type="text" class="form-control" placeholder="Property Address" name="Address" >
</div>


<div class="form-group">
 
  <input type="text" class="form-control" placeholder="Mobile no" name="contact" >
</div>


<div class="form-group">
 
  <input type="text" class="form-control" placeholder="E-mail" name="email" >
</div>
			
			<select class="browser-default custom-select" name="status">
          <option selected>Select status</option>
            <?php $conn= mysqli_connect ("localhost","root", "","obey rooms") or die("coonection failed")  ;

                                       $sql= "SELECT * from status";

                                       $result= mysqli_query($conn,$sql) or die("query failed");
                                       while ($row= mysqli_fetch_assoc($result) ){
                                        $id=$row['s_id'];
                                        $s_title=$row['s_title'];


                                        echo" <option value='$s_title'>$s_title</option>";

                                        }

                                        # code...
                                      
              ?></select>

          

<button type="submit" style="margin-top: 60px;" class="btn btn-info btn-lg" name="submit">Submit</button>
</div>
</form>


	
</div>

</div>


<?php include'include/footer.php'  ;?>
</body>

</html>