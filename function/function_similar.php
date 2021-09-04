<?php

$db= mysqli_connect("localhost","root","","obey rooms");
function rooms1()  {

global $db;

$get_room="SELECT * from rooms order by 1 DESC LIMIT 0,4";
$result=mysqli_query($db,$get_room);
while ($row=mysqli_fetch_array($result) ){

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

}
?>