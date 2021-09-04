
<?php include'function\function_similar.php';?>
<?php
    $con= new mysqli("localhost","root","","obey rooms");

    $name = $_GET['search'];
    //$query = "SELECT * FROM employees
   // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

$result = mysqli_query($con, "SELECT * FROM rooms WHERE address LIKE '%{$name}%'");

while ($row = mysqli_fetch_array($result))
{
 rooms1();
      
}else{
  echo "no data found";
}
    mysqli_close($con);
    ?>
