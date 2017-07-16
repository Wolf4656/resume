<?php
include "select.php";

$name= $_POST ["name"];
$startTime= $_POST ["startTime"];
$endTime= $_POST ["endTime"];
$entryFee= $_POST ["entryFee"];
$playerCap= $_POST ["playerCap"];

if(Select::addEvent($name, $startTime, $endTime, $entryFee, $playerCap)){
echo "SUCCESS";
header('Location: http://localhost/adminevents.php');
} else {
  echo "ERROR";
}



?>
