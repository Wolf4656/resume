<?php
include "select.php";

$connection = Select::connect();

$statement = $connection->prepare(
  "UPDATE events SET name=?, startTime=?, endTime=?, entryFee=?, playerCap=? WHERE ID=?"
);

$statement->bind_param("ssssssss", $a, $b, $c, $d, $e);

$statement->execute();

header("Location: http://localhost/adminevents.php")
?>
