<?php
  include("database2.php");

  $sql = "SELECT * FROM users = 'Sandy'";
  $result =  mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0){     // The mysqli_num_rows() function returns the number of rows in a result set.
      $row = mysqli_fetch_assoc($result);
      echo $row["id"] . "</br>";
      echo $row["user"] . "</br>";
      echo $row["reg_date"] . "</br>";
      }
  else{
    echo"no user found";
  }

  mysqli_close($conn);
?>
