<?php
include '/Configs/Config.php';
$conn = new mysqli($host, $my_user, $my_password, $my_db);
//coneect to Database
$result = $conn -> query("SELECT `ID_F_Name` FROM `user_table`");
?>


<label for="cars">Choose a car:</label>
<select name="cars" id="cars">
<?php
while($row = $result->fetch_assoc())
{
?>
  <option value="<?php echo $row["ID_F_Name"]; ?>"><?php echo $row["ID_F_Name"]; ?></option>
<?php
  }
?>
</select>
