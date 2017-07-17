<?php
ob_start();
include "select.php";

$name= $_POST ["name"];
$email= $_POST ["email"];
$phoneNumber= $_POST ["phoneNumber"];
$contact= $_POST ["contact"];

if(Select::contact($name, $email, $phoneNumber, $contact)){
  header('Location: http://www.wolfsonjosh.com/message.php');
  echo "SUCCESS";
  echo '<script language="javascript">';
  echo 'alert("I have recieved your message and will get back to you as soon as I can")';
  echo '</script>';
} else {
  echo "ERROR";
}
?>
