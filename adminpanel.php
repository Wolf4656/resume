<?php
session_start();
if (isset($_SESSION["adminName"]) == false) {
  header("Location: http://localhost/signin.php");
}
?>
<?php include "header.php" ?>
<?php include "navbar.php" ?>
<?php include "select.php" ?>
<?php $result = Select::smashers(); ?>

<h1>Admin Panel</h1>

<div class="squish">
<a href="adminparticipants.php" style="font-size: 34px;">View Participants</a><br>
<a href="adminevents.php" style="font-size: 34px;">View Events</a><br>
<a href="admincontact.php" style="font-size: 34px;"> View Contact Messages</a><br>
<a href="setups.php" style="font-size: 34px;">View Set-ups</a><br>
<br>
<a href="register-event.php" style="font-size: 34px;">Create Event</a><br>
</div class="squish">

<?php include "footer.php" ?>
