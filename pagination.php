
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
<body>
<div style="background-image: url(images/okbg.png);  background-attachment: fixed; ;background-repeat: no-repeat;">


<div class=row style="margin-right: 10px;margin-left: 10px;">
                                                             
    <?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $conn=mysqli_connect("localhost","root","","obey rooms");
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM rooms";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM rooms LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){



  $room_id=$row['room_id'];

  $room_title=$row['room_title'];

  $room_rent=$row['room_rent'];

  $room_img1=$row['room_img1'];

  $address=$row['address'];


  echo "


   
 <a  href='details.php?id=$room_id' style='text-decoration: none;color: black; '>

        

    <!--First slide-->
    



      <div class='col-md-3 col-sm-6' style='' >
       <div class='card mb-3'>
            <img
           src='admin panel/room_images/$room_img1' style='width: 100%;height: 190px;' >
          <div class='card-body'>
            <h4 class='card-title'>$room_title</h4>
            <p class='card-text'> $address</p>

            <p class='card-text'> $room_rent/M</p>
              <hr width='100%''>
            <a href='details.php?id= $room_id'    class='btn btn-info'>View details</a>
          </div>
        </div>
     </div>
</a>";

}
            
        
        mysqli_close($conn);

    ?>
     
</div>
    <ul class="pagination"  style="justify-content: center;text-align: center;margin-top: 60px;margin-left: 3%;">
        <li style="margin:10px;"><a href="?pageno=1" style="text-decoration: none;color: black;border: 1px solid red;padding: 10px; border-radius: 2px;">< First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>" style="margin:10px;">
            <a style="text-decoration: none;color: black;border: 1px solid;padding: 10px; border-radius: 2px;" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>"style="color: black;border: 1px solid;padding: 10px; border-radius: 2px;">< Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>" style="margin:10px;">
            <a style="text-decoration: none;color: black;border: 1px solid;padding: 10px; border-radius: 2px;" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>" style="color: black;border: 1px solid;padding: 10px; border-radius: 2px;">Next ></a>
        </li>
        <li style="margin:10px;"><a style="text-decoration: none;color: black;border: 1px solid red;padding: 10px; border-radius: 2px;" href="?pageno=<?php echo $total_pages; ?>" >Last ></a></li>
    </ul>

</div>
</body>
</html>