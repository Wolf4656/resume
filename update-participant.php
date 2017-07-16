<?php
include "select.php";

$a = $_POST ["tag"];
$b = $_POST ["region"];
$c = $_POST ["meleeSingles"];
$d = $_POST ["meleeDoubles"];
$e = $_POST ["meleeDoublesPartner"];
$f = $_POST ["wiiuSingles"];
$g = $_POST ["wiiuDoubles"];
$h = $_POST ["wiiuDoublesPartner"];
$i = $_GET ["id"];

$connection = Select::connect();

if(!$statement = $connection->prepare(
  "UPDATE participants SET tag=?, region=?, meleeSingles=?, meleeDoubles=?, meleeDoublesPartner=?, wiiuSingles=?, wiiuDoubles=?, wiiuDoublesPartner=? WHERE ID=?"
)) {
  die("Error = " . $statement->error);
}

if(!$statement->bind_param("ssssssssi", $a, $b, $c, $d, $e, $f, $g, $h, $i)){
  die("Error = " . $statement->error);
}

if(!$statement->execute()){
  die("Error = " . $statement->error);
}

header("Location: http://localhost/adminparticipants.php")
?>
