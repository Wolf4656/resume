<?php
include "select.php";

$connection = Select::connect();

$statement = $connection->prepare(
  "UPDATE setups  SET playerTag=?, event=? WHERE ID=?"
);

$statement->bind_param("ssssssss", $a, $b, $c, $d, $e);

$statement->execute();

header("Location: http://localhost/setups.php")
?>
