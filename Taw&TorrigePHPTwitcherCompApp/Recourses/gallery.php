<?php
include '/Configs/Config.php';
$conn = new mysqli($host, $my_user, $my_password, $my_db);
//Execute query
$result = $conn -> query("SELECT `fldFilePath` FROM `tblpictures`");
while($row = $result->fetch_assoc())
{
//php used to block out the html script so the browserr or server knows what to do with it.
?>
<!--  <img src="<?php echo $row["fldFilePath"] ?>-->
<?php
  echo $row["fldFilePath"], "<br>";
}
/*<img src="/Admin/pictures/2.jpg" alt="cat">
<img src="/Admin/pictures/3.jpg" alt="cat">*/
?>
