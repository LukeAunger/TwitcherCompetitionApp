<html>
<form action="" method="get">
Num to multiply: <input type="text" name="multiply"><br>
Amount of times: <input type="text" name="amount"><br>
<input type="submit">
</form>
<h1>
<?php
if(isset($_GET["multiply"]))
{
//setting variables
$x=0;
$y=$_GET["multiply"];
$z=$_GET["amount"];
//creating a for loop
for($G=0; $G<=$z; $G++)
{
//creating the print out for the "for" loop.
$a=$x*$y;
echo"$x * $y = $a "."</br>";
$x++;
}
}
?>
</h1>
</html>
