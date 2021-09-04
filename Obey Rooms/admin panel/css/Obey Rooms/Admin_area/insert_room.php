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

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>
</head>
<body>

	<div class="row" style="background-color: grey;color: white;">
<div class="col-lg-3">
</div>

	<div class="col-lg-6">

	<div class="row"><!---row start--->
		<div class="col-lg-12">
			

		</div>
		<div class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i>
				DASHBOARD/Insert rooms
			</li>
			

		</div>
		
	</div><!---row start--->

	<div class="row" >
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa a-money fa-w"></i>Insert Room
					</h3>
					
				</div>
				<div class="panel-body">
					<form class="form-horizontal"  method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label class="col-md-3 control-label">Room title</label>
							<input type="text" name="room_title" class="form-control" required="">
							
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">address</label>
							<input type="text" name="room_address" class="form-control" required="">
							
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Room category</label>
						<select class="room_cat" class="form-group" name="room_cat">
							<option>select room category</option>
							<?php $conn= mysqli_connect ("localhost","root", "","obey rooms") or die("coonection failed")  ;

                                       $sql= "SELECT * from room_categories";

                                       $result= mysqli_query($conn,$sql) or die("query failed");
                                       while ($row= mysqli_fetch_assoc($result) ){
                                       	$id=$row['r_cat_id'];
                                       	$cat_title=$row['r_cat_title'];


                                       	echo" <option value='$id'>$cat_title</option>";

                                       	}

                                       	# code...
                                      
							?>

							


						</select>
							
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">category</label>
							<select class="cat" class="form-control" name="cat">
								<option>Select category
									
								</option>
								<?php $conn= mysqli_connect ("localhost","root", "","obey rooms") or die("coonection failed")  ;

                                       $sql= "SELECT * from categories";

                                       $result= mysqli_query($conn,$sql) or die("query failed");
                                       while ($row= mysqli_fetch_assoc($result) ){
                                       	$id=$row['cat_id'];
                                       	$cat_title=$row['cat_title'];


                                       	echo" <option value='$id'>$cat_title</option>";

                                       	}

                                       	# code...
                                      
							?>

							
							</select>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">room image 1</label>
							<input type="file" name="room_img1" class="form-control" required="">
							
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">room image 2</label>
							<input type="file" name="room_img2" class="form-control" required="">
							
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">room image 3</label>
							<input type="file" name="room_img3" class="form-control" required="">
							
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">room rent</label>
							<input type="text" name="room_rent" class="form-control" required="">
							
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">room Description</label>
						<textarea class="form-control" name="room_desc" rows="6" cols="19"></textarea>
						</div>

						<div class="form-control">
							<input type="submit" name="submit"value="Insert product" class="btn btn-primary form-control">
							
						</div>
						
					</form>
					
				</div>
				
			</div>
		</div>
		

	</div>
	

</div>
<div class="col-lg-3"></div>


</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php 

if (isset($_POST['submit'])) {

$room_title=$_POST['room_title'];
$room_cat=$_POST['room_cat'];
$cat=$_POST['cat'];
$room_rent=$_POST['room_rent'];
$room_desc=$_POST['room_desc'];
$room_address=$_POST['room_address'];




$room_img1=$_FILES['room_img1']['name'];
$room_img2=$_FILES['room_img2']['name'];
$room_img3=$_FILES['room_img3']['name'];


$temp_name1=$_FILES['room_img1']['tmp_name'];
$temp_name2=$_FILES['room_img2']['tmp_name'];
$temp_name3=$_FILES['room_img3']['tmp_name'];
	# code...


move_uploaded_file($temp_name1, "room_images/$room_img1");
move_uploaded_file($temp_name2, "room_images/$room_img2");
move_uploaded_file($temp_name3, "room_images/$room_img3");



$Insert_room="INSERT INTO rooms(r_cat_id,cat_id,date,room_title,room_img1,room_rent,room_img2,room_img3,room_desc,address)
values('$room_cat','$cat',NOW(),'$room_title','$room_img1','$room_rent','$room_img2','$room_img3','$room_desc','$room_address');";

$run_room=mysqli_query($conn,$Insert_room);
if ($run_room) {
	echo "<script>alert('successful')</script>";

	}
	# code...


}




 ?>