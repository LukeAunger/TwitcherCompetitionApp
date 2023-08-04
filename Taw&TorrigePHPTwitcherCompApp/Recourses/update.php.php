<html>
<form action="" method="get">
Enter your forename: <input type="text" name="fnam"><br>
Enter your surname: <input type="text" name="snam"><br>
<input type="submit">
</form>
<?php
//set up connection parameters
$host = "127.0.0.1";
$my_user = "Luke";
$my_password = "123";
$my_db = "myfirstdatabase";
//Connect to the Database
$mysqli = new mysqli($host, $my_user, $my_password, $my_db);



if(isset($_GET["fnam"]))
{
//Excecute query
$fname = $_GET["fnam"];
$sname = $_GET["snam"];

$sql = "INSERT INTO `user_table` (`ID` , `ID_F_Name` , `ID_S_Name` ) VALUES (NULL , '".$fname."', '".$sname."')";
echo $sql;

$result = $mysqli -> query($sql);

// Redirect

}
else
{
	
  //rediect back to the form	
	
}




//echo "The number of rows are: ". $result -> num_rows, "<br>";
//Display result
$fetching = "SELECT * FROM user_table`";
$results = mysqli -> query($fetching);


while($row = $results -> fetch_assoc())
{
  echo $row["ID"], " ",$row["ID_F_Name"], " ", $row["ID_S_Name"], "<br>";
}


/*
INSERT INTO `user_table` (`ID` , `ID_F_Name` , `ID_S_Name` ) VALUES (NULL , '".$fname."', '".$sname."')
*/
?>
</html>
