<h2>PORTFOLIO</h2>
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('nature')"> Nature</button>
  <button class="btn" onclick="filterSelection('cars')"> Cars</button>
  <button class="btn" onclick="filterSelection('people')"> People</button>
</div>
<?php
include '/Configs/Config.php';
$conn = new mysqli($host, $my_user, $my_password, $my_db);
//Execute query
$result = $conn -> query("SELECT `fldFilePath`, `Title` FROM `tblpictures`");
while($row = $result->fetch_assoc())
{
//php used to block out the html script so the browserr or server knows what to do with it.
?>
<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="<?php echo $row["fldFilePath"] ?>" alt="<?php echo $row["Title"] ?>" style="width:100%">
      <h4><?php echo $row["Title"] ?></h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
<!-- END GRID -->
</div>
<?php
}
?>
