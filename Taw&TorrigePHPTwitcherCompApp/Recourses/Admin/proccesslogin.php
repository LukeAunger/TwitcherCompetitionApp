<?php
session_start();
include '../Configs/Config.php';
//Connect to the database
$conn = new mysqli($host, $my_user, $my_password, $my_db);

$uname = $_POST['username'];
$pword = md5($_POST['password']);

$sql = "SELECT * FROM `userdatabase` WHERE `UserName` = '".$uname."' AND `UserPassword` = '".$pword."'";
// echo $sql;
$result = $conn -> query($sql);
$count=mysqli_num_rows($result);
if($count==1)
{
	$_session['loggedin'] = "true";
	header('location: loggedin.php');
}
else
{
	header('location: ../login.php');
}
?>