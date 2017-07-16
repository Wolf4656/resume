<?php
include "Select.php";

$connection = Select::connect();

$statement = $connection->prepare(
  "DELETE FROM events WHERE ID=?"
);

$statement->bind_param("i", $_GET["ID"]);

$statement->execute();

header("Location: http://localhost/adminevents.php")
?>
