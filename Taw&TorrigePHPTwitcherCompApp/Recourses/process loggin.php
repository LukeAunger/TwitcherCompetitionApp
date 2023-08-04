<?php

include '../Configs/Config.php';

$uname = $_POST['username'];
$pword = $_POST['password'];
echo $uname;
echo $pword;

if($uname == "Luke" && $pword == "123")
{
  echo "Success";
}
else {
  {
    echo "invalid";
    header('Location: ../login.php');
  }
}
if($uname == "Bill" && $pword == "246")
{
  echo "Success";
}
else {
  {
    echo "invalid";
    header('Location: ../login.php');
  }
}

?>
