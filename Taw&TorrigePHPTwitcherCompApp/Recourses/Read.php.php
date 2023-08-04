<?php
include '/Configs/Config.php';
//Connect to the Database
$mysqli = new mysqli($host, $my_user, $my_password, $my_db);
//Excecute query
//$add = $mysqli -> query("INSERT INTO `myfirstdatabase`.`productinventory` (`ProductCode`, `ProdDescription`, `ProdQTYStock`, `ProdQTYBackOrder`, `Price`) VALUES ('', 'table', '3', '0', '249')");
//Displaying table
$result = $mysqli -> query("SELECT * FROM productinventory");
while ($row = $result->fetch_assoc()) {
    echo "Product Code: " . $row["ProductCode"] . "<br>Description: " . $row["ProdDescription"] . "<br>" ."Price: ". $row["Price"] . "<br>" ."Quantity: ". $row["ProdQTYStock"] . "<br>"."Back Order: ". $row["ProdQTYBackOrder"];
}
echo "Total rows: " . $result->num_rows;

//INSERT INTO `normalisationcasestudy`.`orderhistory` (`OrderNum`, `User`, `ProductID`, `ProductPrice`, `UserDisc`) VALUES (NULL, 'Jill', '22', '45', '10'), (NULL, 'Bob', '12', '55', '25');
?>
