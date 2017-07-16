<?php
session_start();
include "select.php";

$adminName = $_POST["adminName"];
$password = $_POST["password"];
//$password = md5($password);

if (Select::signIn($adminName, $password)) {
  $_SESSION["adminName"] = $adminName;
  header('Location: http://localhost/adminpanel.php');
} else {
  header('Location: http://localhost/signin.php');
}

?>
