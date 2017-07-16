<?php include "header.php" ?>
<?php include "navbar.php" ?>

<h1> Create Event </h1>

<div class="registration">
  <form action="create-event.php" method="post">
    <div class="form-group">
      <input class="input-box" type="text" name="name" placeholder="Name">
    </div>
    <div class="form-group">
      <input class="input-box" type="text" name="startTime" placeholder="Start Time">
    </div>
    <div class="form-group">
      <input class="input-box" type="text" name="endTime" placeholder="End Time">
    </div>
    <div class="form-group">
      <input class="input-box" type="text" name="entryFee" placeholder="Entry Fee">
    </div>
    <div class="form-group">
      <input class="input-box" type="text" name="playerCap" placeholder="Player Cap">
    </div>
    <input type="submit" value="Create" name="submit" style="width: 100px; margin-left:250px; margin-top:10px;">
  </form>
</div>

<?php include "footer.php" ?>
