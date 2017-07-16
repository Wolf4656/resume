<?php
 include "header.php";
 include "navbar.php";
 include "select.php";

 $event = Select::eventByID($_GET["ID"]);
?>

<h1> Edit Event </h1>

<form action="update-event.php?id=<?php echo $_GET["ID"] ?>" method="post">
<table class="class1" border="1">
  <tr>
    <th>
      ID
    </th>
    <th>
      Name
    </th>
    <th>
      Start Time
    </th>
    <th>
      End Time
    </th>
    <th>
      Entry Fee
    </th>
    <th>
      Player Cap
    </th>
  </tr>
  <tr>
    <td>
      <input type="text" name="ID" value="<?php echo $event["ID"]?>" style="width: 100px;">
    </td>
    <td>
      <input type="text" name="tag" value="<?php echo $event["name"]?>" style="width: 100px;">
    </td>
    <td>
      <input type="text" name="startTime" value="<?php echo $event["startTime"]?>" style="width: 100px;">
    </td>
    <td>
      <input type="text" name="endTime" value="<?php echo $event["endTime"]?>" style="width: 100px;">
    </td>
    <td>
      <input type="text" name="entryFee" value="<?php echo $event["entryFee"]?>" style="width: 100px;">
    </td>
    <td>
      <input type="text" name="playerCap" value="<?php echo $event["playerCap"]?>" style="width: 100px;">
    </td>
  </tr>
</table>
  <input type="submit" name="submit" value="Save"></input>
</form>

<?php include "footer.php" ?>
