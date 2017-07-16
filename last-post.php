<?php
  include "select.php";
  echo Select::connect()->query("SELECT MAX(ID) AS ID FROM participants")->fetch_assoc()["ID"];
?>
