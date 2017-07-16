<?php
include "Select.php";

$connection = Select::connect();

$statement = $connection->prepare(
  "DELETE FROM participants WHERE ID=?"
);

$statement->bind_param("i", $_GET["ID"]);

$statement->execute();

header("Location: http://localhost/adminparticipants.php")
?>
