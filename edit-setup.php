<?php
 include "header.php";
 include "navbar.php";
 include "select.php";

 $setup = Select::setupByID($_GET["ID"]);
?>

<h1> Edit Setup </h1>

<form action="update-setup.php?id=<?php echo $_GET["ID"] ?>" method="post">
<table class="class1" border="1">
  <tr>
    <th>
      ID
    </th>
    <th>
      Player Tag
    </th>
    <th>
      Event
    </th>
  </tr>
  <tr>
    <td>
      <input type="text" name="ID" value="<?php echo $setup["ID"]?>" style="width: 100px;">
    </td>
    <td>
      <input type="text" name="playerTag" value="<?php echo $setup["playerTag"]?>" style="width: 100px;">
    </td>
    <td>
      <input type="text" name="event" value="<?php echo $setup["event"]?>" style="width: 100px;">
    </td>
  </tr>
</table>
  <input type="submit" name="submit" value="Save"></input>
</form>

<?php include "footer.php" ?>
