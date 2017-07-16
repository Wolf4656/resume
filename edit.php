<?php
 include "header.php";
 include "navbar.php";
 include "select.php";

 $participant = Select::participantByID($_GET["ID"]);
?>

<h1> Edit Participant </h1>

<div class="squish2">
  <form action="update-participant.php?id=<?php echo $_GET["ID"] ?>" method="post">
    <table class="class1" border="1">
    <tr>
      <th>
        Tag
      </th>
      <th>
        Region
      </th>
      <th>
        Melee Singles
      </th>
      <th>
        Melee Doubles
      </th>
      <th>
        Melee Doubles Partner
      </th>
      <th>
        WiiU Singles
      </th>
      <th>
        WiiU Doubles
      </th>
      <th>
        WiiU Doubles Partner
      </th>
    </tr>
    <tr>
      <td>
        <input type="text" name="tag" value="<?php echo $participant["tag"]?>" style="width: 100px;">
      </td>
      <td>
        <input type="text" name="region" value="<?php echo $participant["region"]?>" style="width: 100px;">
      </td>
      <td>
        <input type="text" name="meleeSingles" value="<?php echo $participant["meleeSingles"]?>" style="width: 100px;">
      </td>
      <td>
        <input type="text" name="meleeDoubles" value="<?php echo $participant["meleeDoubles"]?>" style="width: 100px;">
      </td>
      <td>
        <input type="text" name="meleeDoublesPartner" value="<?php echo $participant["meleeDoublesPartner"]?>" style="width: 100px;">
      </td>
      <td>
        <input type="text" name="wiiuSingles" value="<?php echo $participant["wiiuSingles"]?>" style="width: 100px;">
      </td>
      <td>
        <input type="text" name="wiiuDoubles" value="<?php echo $participant["wiiuDoubles"]?>" style="width: 100px;">
      </td>
      <td>
        <input type="text" name="wiiuDoublesPartner" value="<?php echo $participant["wiiuDoublesPartner"]?>" style="width: 100px;">
      </td>
    </tr>
  </table>
    <input type="submit" name="submit" value="Save"></input>
  </form>
</div>

<?php include "footer.php" ?>
