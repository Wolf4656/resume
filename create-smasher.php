<?php
ob_start();
include "select.php";

$tag= $_POST ["tag"];
$name= $_POST ["name"];
$region= $_POST ["region"];
$phoneNumber= $_POST ["phoneNumber"];
if (isset($_POST['meleeSingles']) && ($_POST['meleeSingles'] == "Yes")) {
 $meleeSingles = "Yes";
} else {
 $meleeSingles = "No";
}
if (isset($_POST['meleeDoubles']) && ($_POST['meleeDoubles'] == "Yes")) {
 $meleeDoubles = "Yes";
} else {
 $meleeDoubles = "No";
}
$meleeDoublesPartner= $_POST ["meleeDoublesPartner"];
if (isset($_POST['wiiuSingles']) && ($_POST['wiiuSingles'] == "Yes")) {
 $wiiuSingles = "Yes";
} else {
 $wiiuSingles = "No";
}
if (isset($_POST['wiiuDoubles']) && ($_POST['wiiuDoubles'] == "Yes")) {
 $wiiuDoubles = "Yes";
} else {
 $wiiuDoubles = "No";
}
$wiiuDoublesPartner= $_POST ["wiiuDoublesPartner"];
if (isset($_POST['meleeSetup']) && ($_POST['meleeSetup'] == "Yes")) {
 $meleeSetup = "Yes";
} else {
 $meleeSetup = "No";
}
if (isset($_POST['wiiuSetup']) && ($_POST['wiiuSetup'] == "Yes")) {
 $wiiuSetup = "Yes";
} else {
 $wiiuSetup = "No";
}

if(Select::addSmasher($tag, $name, $region, $phoneNumber, $meleeSingles, $meleeDoubles, $meleeDoublesPartner,
$wiiuSingles, $wiiuDoubles, $wiiuDoublesPartner, $meleeSetup, $wiiuSetup)){
echo "SUCCESS";
header('Location: http://subzeroheros.net/thanks.php');
} else {
  echo "ERROR";
}



?>
