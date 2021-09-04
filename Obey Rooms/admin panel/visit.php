<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CRUD</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>Obey Rooms <img style="height: 40px;width: 40px; margin-top: 5px;" src="images/logo11.png"></h1>
        </div>
        <div id="menu">
            <ul>
                <li>
                    <a href="#">Visit</a>
                </li>
                
            </ul>
        </div>

<div id="main-content">
    <h2>All Records</h2>
    <?php
      include 'config.php';

      $sql = "SELECT * FROM visit";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Date</th>
        <th>Time</th>
        <th>Email</th>
        <th>room id</th>
       
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['D']; ?></td>
                <td><?php echo $row['T']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['product_id']; ?></td>
                
               
            </tr>
          <?php } ?>
        </tbody>
    </table>
  <?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($conn);
  ?>
</div>
</div>
</body>
</html>
