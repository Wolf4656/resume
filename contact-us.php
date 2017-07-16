<?php
ob_start();
include "select.php";

$name= $_POST ["name"];
$email= $_POST ["email"];
$phoneNumber= $_POST ["phoneNumber"];
$contact= $_POST ["contact"];

if(Select::contact($name, $email, $phoneNumber, $contact)){
echo "SUCCESS";
header('Location: http://www.subzeroheros.net/message.php');
} else {
  echo "ERROR";
}
?>
