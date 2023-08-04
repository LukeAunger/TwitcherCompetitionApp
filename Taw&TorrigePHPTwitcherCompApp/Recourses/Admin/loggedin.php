<?php
session_start();
if(!isset($_SESSION['loggedin']))
{
	echo "logged in";
}
//Connect to the Database
include '../Configs/Config.php';
$mysqli = new mysqli($host, $my_user, $my_password, $my_db);
/*
//Excecute query
$fname = "bob.gilbert";
$pass = md5("letmein");

$sql = "INSERT INTO `userdatabase` (`UserID`, `UserName` , `UserPassword` ) VALUES (NULL , '".$fname."', '".$pass."')";
echo $sql;

$result = $mysqli -> query($sql);
*/
// Redirect
?>