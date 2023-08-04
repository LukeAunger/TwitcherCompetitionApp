<html>
</html>
<?php
include 'Config#2.php';
//Connect to the Database
$mysqli = new mysqli($host, $my_user, $my_password, $my_db);
$sql = "SELECT OrderNum, User, ProductID FROM orderhistory";
$result = mysqli_query($sql);

if (mysqli_num_rows($result) > 0)
{
  // output data of each row
  while($row = mysqli_fetch_assoc($result))
  {
    echo "Order Number: " . $row["OrderNum"]. " - Name: " . $row["User"]. " " . $row["ProductID"]. "<br>";
  }
}
?>
