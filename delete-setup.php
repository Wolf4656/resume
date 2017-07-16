<?php
include "Select.php";

$connection = Select::connect();

$statement = $connection->prepare(
  "DELETE FROM setups WHERE ID=?"
);

$statement->bind_param("i", $_GET["ID"]);

$statement->execute();

header("Location: http://localhost/setups.php")
?>
